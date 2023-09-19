<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\PdfController2;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;


Route::get('/', function () {
    return view('index');
});

Route::get('/gerador', [PdfController::class, 'generatePdf'])->name('gerador');
Route::get('/gerador2', [PdfController2::class, 'generatePdf2'])->name('gerador2');