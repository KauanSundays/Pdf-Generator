<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;


Route::get('/', function () {
    return view('index');
});

Route::get('/gerador', [PdfController::class, 'generatePdf'])->name('gerador');