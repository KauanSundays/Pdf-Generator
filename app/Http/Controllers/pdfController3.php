<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class pdfController3 extends Controller
{
    public function generatePdf3()
    {
    $pdf = Pdf::loadView('welcome3');

    return $pdf->stream('orcamento.pdf');
    }
}
