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


class PdfToWordController extends ConversionController
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['route'] = 'pdf-to-word.store';
        $data['file_type'] = '.pdf';
        $data['title'] = 'PDF To Word';
        $data['type'] = 'Pdf';
        $data['conversion'] = 'word';

        return view('frontend.common_converter_file', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
       $request->validate([
            'file' => 'required|file|mimes:pdf|max:10000', // Ensure the file is a PDF
        ]);
        $request['conversionType'] = 'pdf_to_doc';
        return $this->convert($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    

}
