<?php

namespace App\Http\Controllers;

use App\Models\pengaduanModel;
use App\Models\penggaduanModel;
use Illuminate\Http\Request;

class pengaduanController extends Controller
{
    //
    public function index()
    {
        $pengaduan = pengaduanModel::all()->with('pelanggan')->get();
        return view('pengaduan.pengaduan', compact('pengaduan'));
    }

    public function tambah(){
        
    }
}