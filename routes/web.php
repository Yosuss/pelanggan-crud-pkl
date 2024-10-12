<?php

use App\Http\Controllers\pelangganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[pelangganController::class,'index'])->name('pelanggan');