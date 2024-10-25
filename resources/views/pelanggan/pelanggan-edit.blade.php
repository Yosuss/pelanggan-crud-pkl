@extends('template.layout')
@section('konten')
    <div class="bg-gray-200 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-md ">
            <h2 class="text-2xl font-bold mb-6 text-center capitalize">edit data</h2>
            <form action="{{ route('pelanggan.update', $pelanggan->id_pelanggan) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_pelanggan" class="block text-sm font-medium text-gray-700">id pelanggan</label>
                    <div name="id_pelanggan" id="id_pelanggan">{{ $pelanggan->id_pelanggan }}</div>
                    {{-- <input type="number" name="id_pelanggan" id="id_pelanggan" required
                        value="{{ $pelanggan->id_pelanggan }}"> --}}
                </div>
                <div class="mb-4">
                    <label for="cabang" class="block text-xl font-medium text-gray-700">cabang</label>
                    <select name="cabang" id="cabang"
                        class="mt-1 capitalize block w-full py-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        required value="{{ $pelanggan->cabang }}">
                        <option value="teluk buyung"
                            @if ($pelanggan->cabang == 'teluk buyung') {
                            {{ 'selected' }}
                        } @endif>
                            teluk buyung</option>
                        <option value="jati sari"
                            @if ($pelanggan->cabang == 'jati sari') {
                            {{ 'selected' }}
                        } @endif>
                            jati sari</option>
                        <option value="rawa tembaga"
                            @if ($pelanggan->cabang == 'rawa tembaga') {
                            {{ 'selected' }} 
                        } @endif>
                            rawa tembaga</option>
                        <option value="wisma asri"
                            @if ($pelanggan->cabang == 'wisma asri') {
                            {{ 'selected' }}
                        } @endif>
                            wisma asri</option>
                        <option value="pondok hijau"
                            @if ($pelanggan->cabang == 'pondok hijau') {
                            {{ 'selected' }}
                        } @endif>
                            pondok hijau</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-xl font-medium text-gray-700">nama</label>
                    <input type="text" name="nama" id="nama"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        required value="{{ $pelanggan->nama }}">
                </div>
                <div class="mb-4">
                    <label for="alamat" class="block text-xl font-medium text-gray-700">alamat</label>
                    <input type="text" name="alamat" id="alamat"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        required value="{{ $pelanggan->alamat }}">
                </div>
                <div class="mb-4">
                    <label for="no_telepon" class="block text-xl font-medium text-gray-700">no_telepon</label>
                    <input type="number" name="no_telepon" id="no_telepon"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        required value="{{ $pelanggan->no_telepon }}">
                </div>
                <div class="mb-4">
                    <label for="kelompok_pelanggan" class="block text-xl font-medium text-gray-700">kelompok
                        pelanggan</label>
                    <select name="kelompok_pelanggan" id="kelompok_pelanggan"
                        class="mt-1 capitalize block w-full py-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        required value="{{ $pelanggan->kelompok_pelanggan }}">
                        <option value="social"
                            @if ($pelanggan->kelompok_pelanggan == 'social') {
                            {{ 'selected' }}
                        } @endif>
                            social</option>
                        <option value="rumah tangga"
                            @if ($pelanggan->kelompok_pelanggan == 'rumah tangga') {
                            {{ 'selected' }}
                        } @endif>
                            rumah tangga</option>
                        <option value="niaga"
                            @if ($pelanggan->kelompok_pelanggan == 'niaga') {
                            {{ 'selected' }}
                        } @endif>
                            niaga</option>
                        <option value="industri"
                            @if ($pelanggan->kelompok_pelanggan == 'industri') {
                            {{ 'selected' }}
                        } @endif>
                            industri</option>
                    </select>
                </div>
                <div class="btn flex gap-2">
                    <a href="{{ route('pelanggan') }}"
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
