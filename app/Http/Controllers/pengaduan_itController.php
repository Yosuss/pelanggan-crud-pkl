<?php

namespace App\Http\Controllers;

use App\Models\pelangganModel;
use App\Models\pengaduanItModel;
use App\Models\pengaduanModel;
use Illuminate\Http\Request;

class pengaduan_itController extends Controller
{
    //
    public function index()
    {
        $pengaduan_it = pengaduanItModel::all();
        // $pengaduan_it = pengaduanItModel::with('pelanggan')->get();  
        $pelanggan = pelangganModel::all();
        return view('pengaduan_it.pengaduan_it', compact('pengaduan_it', 'pelanggan'));
    }

    public function tambah(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'bagian' => 'required|string',
            'pengaduan' => 'required|string',
        ]);

        $data = new pengaduanItModel();
        $data->nama = $request->nama;
        $data->bagian = $request->bagian;
        $data->pengaduan = $request->pengaduan;
        $data->save();

        // Redirect atau beri notifikasi sukses
        return redirect()->route('pengaduan_it')->with('success', 'Pengaduan berhasil ditambahkan.');
    }

    public function hapus($id)
    {
        try {
            pengaduanItModel::where('id_pengaduan_it', $id)->delete();
            return to_route('pengaduan_it');
        } catch (\Exception $e) {
            return to_route('pengaduan_it')->withErrors('gagal hapus');
        }
    }

    public function edit(Request $request, $id)
    {
        $pengaduan_it = pengaduanItModel::findOrFail($id);
        return view('pengaduan_it.pengaduan_it_edit', compact('pengaduan_it'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'bagian' => 'required|string',
            'pengaduan' => 'required|string',
        ]);

        $data = pengaduanItModel::findOrFail($id);
        $data->nama = $request->nama;
        $data->bagian = $request->bagian;
        $data->pengaduan = $request->pengaduan;
        $data->save();

        // Redirect atau beri notifikasi sukses
        return redirect()->route('pengaduan_it')->with('success', 'Pengaduan berhasil ditambahkan.');
    }
    
    public function update_pengaduan_it(Request $request, $id)
    {
        $pengaduan_it = pengaduanItModel::findOrFail($id);
        return view('pengaduan_it.pengaduan_it_update', compact('pengaduan_it'));
    }
    
    public function submit_pengaduan_it(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'update_pengaduan_it' => 'required|string',
        ]);

        $data = pengaduanItModel::findOrFail($id);
        $data->update_pengaduan_it = $request->update_pengaduan_it;
        $data->save();

        // Redirect atau beri notifikasi sukses
        return redirect()->route('pengaduan_it')->with('success', 'Pengaduan berhasil ditambahkan.');
    }
}