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

    public function edit(Request $request, $id)
    {
        $pelanggan = pelangganModel::findOrFail($id);
        return view('pelanggan.pelanggan-edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cabang' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'kelompok_pelanggan' => 'required',
        ]);

        $pelanggan = pelangganModel::findOrFail($id);
        try {
            $pelanggan->cabang = $request->input('cabang');
            $pelanggan->nama = $request->input('nama');
            $pelanggan->alamat = $request->input('alamat');
            $pelanggan->no_telepon = $request->input('no_telepon');
            $pelanggan->kelompok_pelanggan = $request->input('kelompok_pelanggan');
            $pelanggan->save();
            return redirect()->route('pelanggan');
        } catch (\Exception $e) {
            return redirect()->route('pelanggan')->withErrors('Gagal mengupdate data.');
        }

        return redirect()->route('pelanggan')->with('success', 'inputan berhasil ditambahkan');
    }
}