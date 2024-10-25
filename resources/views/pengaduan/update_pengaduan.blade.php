@extends('template.layout')
@section('konten')
    <div class="bg-gray-200 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-md ">
            <h2 class="text-2xl font-bold mb-6 text-center capitalize">edit data</h2>
            <form action="{{ route('pengaduan.update-pengaduan', $pengaduan->id_pengaduan) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_pengaduan" class="block text-xl font-medium text-gray-700">id pelanggan</label>
                    <div name="id_pengaduan" id="id_pengaduan" class="text_xl">{{ $pengaduan->id_pengaduan }}</div>
                </div>
                {{-- <div class="mb-4">
                    <label for="cabang" class="block text-xl font-medium text-gray-700">cabang</label>
                    <div name="cabang" id="cabang" class="text-xl">
                        {{ $pengaduan_all->pelanggan->cabang }}
                    </div>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-xl font-medium text-gray-700">nama</label>
                    <div name="nama" id="nama" class="text-xl">
                        {{ $pengaduan_all->pelanggan->nama }}
                    </div>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="block text-xl font-medium text-gray-700">alamat</label>
                    <div name="alamat" id="alamat" class="text-xl">
                        {{ $pengaduan_all->pelanggan->alamat }}
                    </div>
                </div>
                <div class="mb-4">
                    <label for="no_telepon" class="block text-xl font-medium text-gray-700">no_telepon</label>
                    <div name="no_telepon" id="no_telepon" class="text-xl">
                        {{ $pengaduan_all->pelanggan->no_telepon }}
                    </div>
                </div> --}}
                <div class="mb-4">
                    <label for="pengaduan" class="block text-xl font-medium text-gray-700">pengaduan</label>
                    <select name="pengaduan" id="pengaduan"
                        class="mt-1 capitalize block w-full py-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                        <option value="air kecil"
                            @if ($pengaduan->pengaduan == 'air kecil') {
                            {{ 'selected' }}
                        } @endif>
                            air kecil</option>
                        <option value="air kotor"
                            @if ($pengaduan->pengaduan == 'air kotor') {
                            {{ 'selected' }}
                        } @endif>
                            air kotor</option>
                        <option value="air tidak keruh"
                            @if ($pengaduan->pengaduan == 'air tidak keruh') {
                            {{ 'selected' }}
                        } @endif>
                            air tidak keruh</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="pegawai" class="block text-xl font-medium text-gray-700">pegawai</label>
                    <select name="pegawai" id="pegawai"
                        class="mt-1 capitalize block w-full py-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                        <option value="">-- Pilih pegawai --</option>
                        <option value="arip"
                            @if ($pengaduan->pegawai == 'arip') {
                            {{ 'selected' }}
                        } @endif>
                            arip</option>
                        <option value="dewa"
                            @if ($pengaduan->pegawai == 'dewa') {
                            {{ 'selected' }}
                        } @endif>
                            dewa</option>
                    </select>
                </div>
                <div class="btn flex gap-2">
                    <a href="{{ route('pengaduan') }}"
                        class="w-full flex justify-center items-center shadow-md bg-gray-400 text-white p-2 rounded-md hover:bg-gray-700">
                        <button type="submit">kembali</button>
                    </a>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white p-2 rounded-md shadow-md hover:bg-blue-700">update</button>
                </div>
            </form>
        </div>

    </div>
@endsection
