<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

$pdf = Pdf::loadView('pdf.invoice', $data);
return $pdf->download('invoice.pdf');

Route::get('/', function () {
    $pdf = Pdf::loadView('pdf.invoice', $data);
    return $pdf->download('invoice.pdf');
})