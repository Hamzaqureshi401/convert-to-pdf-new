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
    // Validate the file input to ensure it's an HTML file and less than 8MB
    $request->validate([
        'file' => 'required|mimes:html|max:8000',
    ]);

    // Add a conversion type to the request
    $request['conversionType'] = 'html_to_pdf';

    // Call the convert method to process the file
    return $this->convert($request);
}

}
