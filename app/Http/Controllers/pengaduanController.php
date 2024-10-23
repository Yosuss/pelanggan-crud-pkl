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
        $pengaduan = pengaduanModel::with('pelanggan')->get();
        return view('pengaduan.pengaduan', compact('pengaduan'));
    }

    public function tambah($id)
    {
        $pengaduan = pengaduanModel::with('pelanggan')->findOrFail($id); 
        return view('component.tambah_pengaduan', compact('pengaduan'));
    }
}