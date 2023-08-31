<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function generatePdf() 
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadview('index');
        return $pdf->stream(); //or download
    }
}
