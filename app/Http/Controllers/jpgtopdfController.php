<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use setasign\Fpdi\Fpdi;
use PDF;

class jpgtopdfController extends ConversionController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.pdftool.jpgtopdf');
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        $data['route'] = 'jpg-to-pdf.store';
        $data['file_type'] = '.jpg , .jpeg';
        $data['title'] = 'Jpg To Pdf';
        $data['type'] = 'Jpg';
        $data['conversion'] = 'Pdf';

        return view('frontend.common_converter_file', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg|max:8000',
        ]);

        $request['conversionType'] = 'jpg_to_pdf';
        return $this->convert($request);
    }
}
