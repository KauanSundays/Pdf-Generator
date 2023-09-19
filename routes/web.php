<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;


Route::get('/', function () {
    return view('index');
});


Route::get('/gerador', 'PdfController@generatePdf')->name('gerador');

// Route::get('/gerador', function () {

//     $pdf = Pdf::loadView('welcome');
//     return $pdf->download('invoice.pdf');

// });