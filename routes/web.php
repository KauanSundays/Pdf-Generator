<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;


Route::get('/', function () {

    $pdf = Pdf::loadView('pdf.invoice');
    return $pdf->download('invoice.pdf');
    
});