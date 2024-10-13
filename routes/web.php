<?php

use App\Http\Controllers\pelangganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[pelangganController::class,'index'])->name('pelanggan');
Route::post('/pelanggan-tambah',[pelangganController::class,'tambah'])->name('pelanggan.tambah');
Route::delete('/pelanggan-hapus{id}',[pelangganController::class,'hapus'])->name('pelanggan.hapus');
Route::get('/pelanggan-edit{id}',[pelangganController::class,'edit'])->name('pelanggan.edit');
Route::post('/pelanggan-update{id}',[pelangganController::class,'update'])->name('pelanggan.update');