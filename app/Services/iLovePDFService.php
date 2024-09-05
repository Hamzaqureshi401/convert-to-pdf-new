<?php

namespace App\Services;

use Ilovepdf\Ilovepdf;
use Exception;

class ILovePDFService
{
    protected $apiKey;
    protected $secretKey;
    protected $ilovepdf;

    public function __construct()
    {
        $this->apiKey = env('ILOVE_PDF_PUBLIC_KEY');
        $this->secretKey = env('ILOVE_PDF_SECRET_KEY');
         // Initialize Ilovepdf object with your public and secret keys
        $this->ilovepdf = new Ilovepdf($this->apiKey, $this->secretKey);
    }
    

    public function convertDocxToPdf($docxFilePath)
    {
        try {
            // Create a new Office to PDF task
            $myTaskConvertOffice = $this->ilovepdf->newTask('officepdf');

            // Add the DOCX file to the task
            $myTaskConvertOffice->addFile($docxFilePath);

            // Execute the task (convert DOCX to PDF)
            $myTaskConvertOffice->execute();

            $myTaskConvertOffice->download();

            // Set the output directory to the 'public/doc_to_pdfs' folder
            $outputDirectory = public_path('doc_to_pdfs'); // Path to the 'public/doc_to_pdfs' directory

            // Ensure the directory exists, or create it
            if (!is_dir($outputDirectory)) {
                mkdir($outputDirectory, 0755, true);
            }

            // Download the converted PDF to the output directory
            $downloadedFilePath = $myTaskConvertOffice->download($outputDirectory);

            sleep(10);

            if (!$downloadedFilePath || !file_exists($downloadedFilePath)) {
                throw new Exception('Failed to download the converted file.');
            }

            return $downloadedFilePath; // Return the path to the converted PDF
        } catch (Exception $e) {
            return 'Error during conversion: ' . $e->getMessage();
        }
    }
}
