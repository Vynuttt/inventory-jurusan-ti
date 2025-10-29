<?php

use App\Models\BarangTidakHabisPakai;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/laporan/barang-tidak/pdf', function () {
    $data = BarangTidakHabisPakai::all();
    $pdf = Pdf::loadView('exports.laporan-barang-tidak-habis', compact('data'));
    return $pdf->download('laporan-barang-tidak-habis.pdf');
})->name('laporan.barang.tidak.pdf');

