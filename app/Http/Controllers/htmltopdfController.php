<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class htmltopdfController extends ConversionController
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['route'] = 'html-to-pdf.store';
        $data['file_type'] = '.html ';
        $data['title'] = 'Html To Pdf';
        $data['type'] = 'html';
        $data['conversion'] = 'Pdf';

        return view('frontend.common_converter_file', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

            // Inject base URL into the HTML content for relative paths
            $baseUrl = url('/'); // Your application's base URL
            $content = preg_replace('/<head([^>]*)>/', '<head$1><base href="' . $baseUrl . '">', $content);
            $this->deductPayment();
            
            // Pass the modified HTML content to the Blade view
            return view('someblade', compact('content'));
        }
    }

    public function deductPayment(){

        $debitStatus = $this->debitWallet();
    }

}
    


