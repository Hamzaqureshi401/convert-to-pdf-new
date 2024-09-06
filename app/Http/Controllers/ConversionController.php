<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use Dompdf\Dompdf;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Settings;
use Smalot\PdfParser\Parser;
use setasign\Fpdi\Fpdi;
use App\Services\ILovePDFService;
use App\Services\WalletService;

class ConversionController extends Controller
{
    protected $iLovePDFService;
        protected $walletService;


    public function __construct(ILovePDFService $iLovePDFService , WalletService $walletService)
    {
        // Configure PDF renderer
        Settings::setPdfRendererName(Settings::PDF_RENDERER_DOMPDF);
        Settings::setPdfRendererPath(base_path('vendor/dompdf/dompdf'));
        $this->iLovePDFService = $iLovePDFService;
         $this->walletService = $walletService;
    }

     public function convert($request)
    {
        set_time_limit(0);
        $request->validate([
            'file' => 'required|file',
            'conversionType' => 'required|string',
        ]);

        // Handle file upload
        $uploadedFile = $request->file('file');
        $originalFilePath = $uploadedFile->store('uploads'); // Stores file in 'storage/app/uploads'

        // Convert relative path to absolute path
        $absoluteFilePath = storage_path('app/' . $originalFilePath);

        // Perform conversion based on the selected conversion type
        $convertedFilePath = $this->performConversion($absoluteFilePath, $request->conversionType, $request);

        // Debit wallet before downloading the file
        $debitStatus = $this->debitWallet();

        if ($debitStatus['success']) {
            // Generate file download response
            return $this->downloadConvertedFile($convertedFilePath, $request->conversionType);
        } else {
            // If debiting fails, return an error response
            return redirect()->back()->with('error', $debitStatus['message']);
        } 
    }



    private function performConversion($filePath, $type, $request)
    {
        switch ($type) {
            case 'html_to_pdf':
                return $this->convertHtmlToPdf($filePath, $request);
            case 'jpg_to_pdf':
                return $this->convertJpgToPdf($filePath);
            case 'doc_to_pdf':
                return $this->convertDocToPdf($filePath);
            case 'pdf_to_doc':
                return $this->convertPdfToDoc($filePath);
            default:
                throw new \Exception("Conversion type not supported.");
        }
    }

    private function convertDocToPdf($filePath)
    {
        // Check if the file exists
        if (!file_exists($filePath)) {
            throw new \Exception("File does not exist: " . $filePath);
        }

        // Pass the absolute file path to the iLovePDF service
        return $this->iLovePDFService->convertDocxToPdf($filePath);
    }

    private function downloadConvertedFile($filePath , $conversionType)
    {
        if('doc_to_pdf' == $conversionType){
            return $this->downloadDocToPdf();
        }
        $fileContents = Storage::get($filePath);
        $fileName = basename($filePath);

        return response()->make($fileContents, 200, [
            'Content-Type' => Storage::mimeType($filePath),
            'Content-Disposition' => "attachment; filename=\"$fileName\"",
        ]);
    }

    private function downloadDocToPdf(){

        // Define the path to the directory
        $directoryPath = public_path('doc_to_pdfs');

        // Get all PDF files from the directory
        $files = File::files($directoryPath);

        // Check if the directory is empty
        if (empty($files)) {
            return back()->with('error', 'No PDF files found in the directory.');
        }

        // Get the latest file based on modification time
        $latestFile = collect($files)->sortByDesc(function ($file) {
            return $file->getMTime(); // File modification time
        })->first();

        // Get the file path
        $filePath = $latestFile->getRealPath();
        $fileName = $latestFile->getFilename();

        // Return the file as a download response
        return Response::download($filePath, $fileName);

    }


    private function convertHtmlToPdf($filePath , $request)
    {


        $htmlContent = $this->getHtmlBody($request);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($htmlContent);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $output = $dompdf->output();
        $pdfFilePath = 'converted/' . pathinfo($filePath, PATHINFO_FILENAME) . '.pdf';
        Storage::put($pdfFilePath, $output);
        sleep(10);

        return $pdfFilePath;
    }

    public function getHtmlBody($request)
    {
        // Validate the request
        $request->validate([
            'file' => 'required|mimes:html|max:2048', // Adjust size limit as needed
        ]);

        // Handle the uploaded file
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            
            // Read the file content
            $content = file_get_contents($file->getRealPath());
            
            // Return the HTML content as a response
            return response()->make($content, 200, [
                'Content-Type' => 'text/html',
            ]);
        }
        
        return redirect()->back()->withErrors('No file uploaded');
    }

    private function convertJpgToPdf($filePath)
    {
        $imagePath = $filePath;
        $pdfFilePath = 'converted/' . pathinfo($filePath, PATHINFO_FILENAME) . '.pdf';

        $pdf = new Fpdi();
        $pdf->AddPage();
        $pdf->Image($imagePath, 10, 10, 190); // Adjust dimensions and position as needed
        $pdf->Output('F', Storage::path($pdfFilePath));

        return $pdfFilePath;
    }



    private function convertPdfToDoc($filePath)
    {
        $parser = new Parser();
        $pdf = $parser->parseFile($filePath);
        $text = $pdf->getText();
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
        $section->addText($text);

        // Ensure the 'converted' directory exists
        $convertedDir = storage_path('app/converted');
        if (!File::exists($convertedDir)) {
            File::makeDirectory($convertedDir, 0755, true);
        }

        // Construct the full file path
        $docFilePath = $convertedDir . '/' . pathinfo($filePath, PATHINFO_FILENAME) . '.docx';

        // Save the file and return the relative path
        $phpWord->save($docFilePath, 'Word2007');
        return 'converted/' . pathinfo($filePath, PATHINFO_FILENAME) . '.docx';
    }

    

   public function uploadPdf(Request $request)
    {
        $request->validate([
            'pdfFile' => 'required|mimes:pdf|max:10000',
        ]);

        $file = $request->file('pdfFile');
        $filename = 'uploaded_' . time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/pdfs', $filename);

        return response()->json([
            'status' => 'success',
            'url' => Storage::url('pdfs/' . $filename)
        ]);
    }


    public function updatePdf(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf',
        ]);

        $file = $request->file('file');
        $fileName = 'edited_' . time() . '.pdf';
        $path = $file->storeAs('public/pdfs', $fileName);

        return response()->json(['path' => Storage::url($path), 'status' => 'success']);
    }

    public function debitWallet()
    {
        $user = auth()->user();
        try {
            $this->walletService->debit($user->wallet, 1, 'Withdrew funds in Pdf To Doc');
            return ['success' => true, 'message' => 'Funds withdrawn successfully'];
        } catch (\Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}
