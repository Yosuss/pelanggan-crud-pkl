@extends('template.layout')
@section('konten')
    <div class="bg-gray-200 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-md ">
            <h2 class="text-2xl font-bold mb-6 text-center capitalize">edit data</h2>
            <form action="{{ route('pengaduan_it.update', $pengaduan_it->id_pengaduan_it) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_pengaduan_it" class="block text-xl font-medium text-gray-700">id pengaduan it</label>
                    <div name="id_pengaduan_it" id="id_pengaduan_it" class=" text-xl">{{ $pengaduan_it->id_pengaduan_it }}
                    </div>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-xl font-medium text-gray-700">nama</label>
                    <input type="text" name="nama" id="nama"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl" 
                        value="{{ $pengaduan_it->nama }}">
                </div>
                <div class="mb-4">
                    <label for="bagian" class="block text-xl font-medium text-gray-700">bagian</label>
                    <select name="bagian" id="bagian"
                        class="mt-1 capitalize block w-full py-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                        <option value="">-- Pilih bagian --</option>
                        <option value="Spi"
                            @if ($pengaduan_it->bagian == 'Spi') {
                            {{ 'selected' }} 
                        } @endif>
                            Spi</option>
                        <option value="Sdm"
                            @if ($pengaduan_it->bagian == 'Sdm') {
                            {{ 'selected' }}
                        } @endif>
                            Sdm</option>
                        <option value="Distribusi"
                            @if ($pengaduan_it->bagian == 'Distribusi') {
                            {{ 'selected' }}
                        } @endif>
                            Distribusi</option>
                        <option value="produksi"
                            @if ($pengaduan_it->bagian == 'produksi') {
                            {{ 'selected' }}
                        } @endif>
                            produksi</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="pengaduan" class="block text-xl font-medium text-gray-700">pengaduan</label>
                    <input type="text" name="pengaduan" id="pengaduan"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        value="{{ $pengaduan_it->pengaduan }}">
                </div>
                <div class="btn flex gap-2">
                    <a href="{{ route('pengaduan_it') }}"
                        class="w-full flex justify-center items-center shadow-md bg-gray-400 text-white p-2 rounded-md hover:bg-gray-700">
                        <button type="button">kembali</button>
                    </a>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white p-2 rounded-md shadow-md hover:bg-blue-700">update</button>
                </div>
            </form>
        </div>

    </div>
@endsection
