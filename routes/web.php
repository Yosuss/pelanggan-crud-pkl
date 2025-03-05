<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\pengaduan_itController;
use App\Http\Controllers\pengaduanController;
use App\Models\pengaduanItModel;
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
Route::get('/pengaduan-update{id}',[pengaduanController::class,'update'])->name('pengaduan.update');
Route::post('/pengaduan-update-pengaduan{id}',[pengaduanController::class,'update_pengaduan'])->name('pengaduan.update-pengaduan');

Route::get('/pengaduan_it',[pengaduan_itController::class,'index'])->name('pengaduan_it');
Route::post('/pengaduan_it-tambah',[pengaduan_itController::class,'tambah'])->name('pengaduan_it.tambah');
Route::delete('/pengaduan_it-hapus{id}',[pengaduan_itController::class,'hapus'])->name('pengaduan_it.hapus');
Route::get('/pengaduan_it-edit{id}',[pengaduan_itController::class,'edit'])->name('pengaduan_it.edit');
Route::post('/pengaduan_it-update{id}',[pengaduan_itController::class,'update'])->name('pengaduan_it.update');
Route::get('/pengaduan_it-update-pengaduan_it{id}',[pengaduan_itController::class,'update_pengaduan_it'])->name('pengaduan_it.update-pengaduan_it');
Route::post('/pengaduan_it-submit-pengaduan_it{id}',[pengaduan_itController::class,'submit_pengaduan_it'])->name('pengaduan_it.submit-pengaduan_it');