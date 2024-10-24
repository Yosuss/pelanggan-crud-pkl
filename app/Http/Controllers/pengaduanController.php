<?php

namespace App\Http\Controllers;

use App\Models\pelangganModel;
use App\Models\pengaduanModel;
use App\Models\penggaduanModel;
use Illuminate\Http\Request;

class pengaduanController extends Controller
{
    //
    public function index()
    {
        // return view('pengaduan.pengaduan', compact('pengaduan'));
        
        $pengaduan = pengaduanModel::with('pelanggan')->get();
        $pelanggan = pelangganModel::all();
        return view('pengaduan.pengaduan', compact('pelanggan','pengaduan'));
    }

    public function tambah(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_pelanggan' => 'required|exists:pelanggan,id_pelanggan', // Validasi ID pelanggan
            'pengaduan' => 'required|string',
        ]);

        $data = new pengaduanModel();
        $data->id_pelanggan = $request->id_pelanggan;
        $data->pengaduan = $request->pengaduan;
        $data->save();

        // Redirect atau beri notifikasi sukses
        return redirect()->route('pengaduan')->with('success', 'Pengaduan berhasil ditambahkan.');
    }
}