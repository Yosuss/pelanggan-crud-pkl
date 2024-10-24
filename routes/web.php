<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\pengaduanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[loginController::class,'index']);
Route::post('/login',[loginController::class,'login'])->name('login');
Route::get('/',[pelangganController::class,'index'])->name('pelanggan');
// Route::get('/',[pelangganController::class,'index'])->middleware('isAdmin')->name('pelanggan');
Route::post('/pelanggan-tambah',[pelangganController::class,'tambah'])->name('pelanggan.tambah');
Route::delete('/pelanggan-hapus{id}',[pelangganController::class,'hapus'])->name('pelanggan.hapus');
Route::get('/pelanggan-edit{id}',[pelangganController::class,'edit'])->name('pelanggan.edit');
Route::post('/pelanggan-update{id}',[pelangganController::class,'update'])->name('pelanggan.update');


Route::get('/pengaduan',[pengaduanController::class,'index'])->name('pengaduan');
Route::post('/pengaduan-tambah',[pengaduanController::class,'tambah'])->name('pengaduan.tambah');
Route::delete('/pengaduan-hapus{id}',[pengaduanController::class,'hapus'])->name('pengaduan.hapus');