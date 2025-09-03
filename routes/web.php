<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoryController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DendaController;

Route::get('/', function (){
    return view('halaman_utama.beranda');
});

// Route::get('/anggota', function () {
//     return view('anggota.index'); // view file resources/views/anggota/index.blade.php
// });


Route::resource('buku', BukuController::class);
Route::resource('kategori', KategoryController::class);
Route::resource('anggota', AnggotaController::class);
Route::resource('penerbit', PenerbitController::class);
Route::get('/peminjaman', [PeminjamanController::class, 'history'])->name('peminjaman.history');
Route::get('/pengembalian', [TransaksiController::class, 'history'])->name('pengembalian.history');
Route::resource('transaksi', TransaksiController::class);
Route::get('transaksi/perpanjang/{id}', [TransaksiController::class, 'perpanjang'])->name('transaksi.perpanjang');
Route::get('transaksi/kembalikan/{id}', [TransaksiController::class, 'kembalikan'])->name('transaksi.kembalikan');

