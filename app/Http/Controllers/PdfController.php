<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    public function generatePdf() 
    {
        $data['name'] = "Kauan";
        $data['idade'] = "toma ta";

        $pdf = Pdf::loadView('welcome', $data);

        return $pdf->stream('invoice.pdf');
    }
}
