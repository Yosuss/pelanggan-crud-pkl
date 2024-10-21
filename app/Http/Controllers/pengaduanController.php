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
        $pengaduan = pengaduanModel::with('pelanggan')->get(); // Mengambil semua pengaduan dengan relasi pelanggan
        return view('pengaduan.pengaduan', compact('pengaduan'));
    }

    public function tambah(){
        
    }
}