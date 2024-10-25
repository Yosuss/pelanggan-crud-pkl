@extends('template.layout')
@section('konten')
    <div class="bg-gray-200 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-md ">
            <h2 class="text-2xl font-bold mb-6 text-center capitalize">edit data</h2>
            <form action="{{ route('pengaduan.update-pengaduan', $pengaduan->id_pengaduan) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_pengaduan" class="block text-xl font-medium text-gray-700">id pelanggan</label>
                    <div name="id_pengaduan" id="id_pengaduan" class=" text-xl">{{ $pengaduan->id_pengaduan }}</div>
                </div>
                <div class="mb-4">
                    <label for="pengaduan" class="block text-xl font-medium text-gray-700">pengaduan</label>
                    <div name="pengaduan" id="pengaduan" class=" text-xl">{{ $pengaduan->pengaduan }}</div>
                </div>
                <div class="mb-4">
                    <label for="update_pengaduan" class="block text-xl font-medium text-gray-700">update pengaduan
                    </label>
                    <input type="text" name="update_pengaduan" id="update_pengaduan" value="{{$pengaduan->update_pengaduan}}"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
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
