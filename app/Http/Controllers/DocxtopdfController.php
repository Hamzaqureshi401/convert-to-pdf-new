<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocxtopdfController extends ConversionController
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
        $data['route'] = 'docx-to-pdf.store';
        $data['file_type'] = '.docs , .docx';
        $data['title'] = 'Word To Pdf';
        $data['type'] = 'Word';
        $data['conversion'] = 'Pdf';

        return view('frontend.common_converter_file', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:doc,docx|max:10000', // Ensure the file is DOC or DOCX
        ]);

        $request['conversionType'] = 'doc_to_pdf';
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
