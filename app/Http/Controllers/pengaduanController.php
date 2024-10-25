<?php

namespace App\Http\Controllers;

use App\Models\pelangganModel;
use App\Models\pengaduanModel;
use Illuminate\Http\Request;

class pengaduanController extends Controller
{
    //
    public function index()
    {
        // return view('pengaduan.pengaduan', compact('pengaduan'));

        $pengaduan = pengaduanModel::with('pelanggan')->get();
        $pelanggan = pelangganModel::all();
        return view('pengaduan.pengaduan', compact('pelanggan', 'pengaduan'));
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

    public function hapus($id)
    {
        try {
            pengaduanModel::where('id_pengaduan', $id)->delete();
            return to_route('pengaduan');
        } catch (\Exception $e) {
            return to_route('pengaduan')->withErrors('gagal hapus');
        }
    }

    public function update($id)
    {
        $pengaduan = pengaduanModel::findOrFail($id);
        $pengaduan_all = pengaduanModel::with('pelanggan')->get();
        return view('pengaduan.update_pengaduan', compact('pengaduan','pengaduan_all'));
    }
    
    public function update_pengaduan(Request $request, $id)
    {
        $request->validate([
            'update_pengaduan' => 'required',
            'pegawai' => 'required',
        ],[
            'update_pengaduan.required' => 'update pengaduan harus diisi.',
            'pegawai.required' => 'pegawai harus diisi.',
        ]);

        $pengaduan = pengaduanModel::findOrFail($id);
        try {
            $pengaduan->update_pengaduan = $request->update_pengaduan;
            $pengaduan->pegawai = $request->pegawai;
            $pengaduan->save();
                return redirect()->route('pengaduan');
        } catch (\Exception $e) {
            return redirect()->route('pengaduan')->withErrors('Gagal mengupdate data.');
        }
        return redirect()->route('pengaduan')->with('success', 'inputan berhasil ditambahkan');
    }

}