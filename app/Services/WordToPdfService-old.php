<?php
namespace App\Services;

use Dompdf\Dompdf;
use PhpOffice\PhpWord\IOFactory;

class WordToPdfService
{
    public function convertToPdf($wordFilePath, $pdfFilePath)
    {
        // Load the Word document
        $phpWord = IOFactory::load($wordFilePath);

        // Save the Word document as HTML
        $htmlFilePath = tempnam(sys_get_temp_dir(), 'word') . '.html';
        $phpWord->save($htmlFilePath, 'HTML');

        // Load the HTML content into Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtmlFile($htmlFilePath);
        $dompdf->setPaper('A4', 'portrait');

        // Render the PDF
        $dompdf->render();

        // Save the PDF to the specified path
        file_put_contents($pdfFilePath, $dompdf->output());

        // Clean up the temporary HTML file
        unlink($htmlFilePath);
    }
}
