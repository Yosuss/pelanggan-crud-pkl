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
        ],[
            'cabang.required' => 'Cabang harus diisi.',
            'nama.required' => 'Nama harus diisi.',
            'alamat.required' => 'Alamat harus diisi.',
            'no_telepon.required' => 'Nomor telepon harus diisi.',
            'kelompok_pelanggan.required' => 'Kelompok pelanggan harus diisi.',        
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
        ],[
            'cabang.required' => 'Cabang harus diisi.',
            'nama.required' => 'Nama harus diisi.',
            'alamat.required' => 'Alamat harus diisi.',
            'no_telepon.required' => 'Nomor telepon harus diisi.',
            'kelompok_pelanggan.required' => 'Kelompok pelanggan harus diisi.',        
        ]);

        $pelanggan = pelangganModel::findOrFail($id);
        try {
            $pelanggan->cabang = $request->cabang;
            $pelanggan->nama = $request->nama;
            $pelanggan->alamat = $request->alamat;
            $pelanggan->no_telepon = $request->no_telepon;
            $pelanggan->kelompok_pelanggan = $request->kelompok_pelanggan;
            $pelanggan->save();
                return redirect()->route('pelanggan');
        } catch (\Exception $e) {
            return redirect()->route('pelanggan')->withErrors('Gagal mengupdate data.');
        }
        return redirect()->route('pelanggan')->with('success', 'inputan berhasil ditambahkan');
    }
}