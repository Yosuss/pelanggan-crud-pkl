<?php

namespace App\Http\Controllers;

use App\Models\pelangganModel;
use Illuminate\Http\Request;

class pelangganController extends Controller
{
    //
    public function index(){
        $pelanggan = pelangganModel::all();
        return view('pelanggan.pelanggan',compact('pelanggan'));
    }
}