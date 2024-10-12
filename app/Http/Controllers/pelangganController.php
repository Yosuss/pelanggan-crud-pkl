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

    public function tambah(Request $request){
        $request->validate([
            'cabang' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'kelompok_pelanggan' => 'required',
        ]);

        // simpan data ( simple )
        $data = new pelangganModel();
        $data->cabang = $request->cabang;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_telepon = $request->no_telepon;
        $data->kelompok_pelanggan = $request->kelompok_pelanggan;
        $data->save();

        return redirect()->route('pelanggan')->with('success', 'inputan berhasil ditambahkan');
    }

    public function hapus($id)
    {
        try {
            pelangganModel::where('id_pelanggan', $id)->delete();
            return to_route('pelanggan');
        } catch (\Exception $e) {
            return to_route('pelanggan')->withErrors('gagal hapus');
        }
    }

    public function edit(){
        
    }
}