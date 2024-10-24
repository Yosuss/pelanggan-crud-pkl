@extends('template.layout')
@section('konten')
    <div class="bg-gray-100 dashboard flex capitalize">
        <!-- Dashboard Menu -->
        <div class="bg-gray-100 w-2/12 h-screen items-center justify-center text-center">
            <a href="{{ url('/') }}">
                {{-- <div class="my-10 mx-6 mt-14 font-bold text-2xl">logo</div> --}}
                <img src="{{ asset('aset/logo-tirta.png') }}" alt="" class="my-10 mx-6 mt-16 w-20">
            </a>
            <div class="list gap-2 justify-center items-center m-6 border-b-2">
                <a href="{{ url('/') }}">
                    <div class="text-left px-4 py-1 my-4 rounded-lg hover:bg-white hover:px-4 hover:py-1 hover:shadow">
                        pelanggan</div>
                </a>
                <a href="{{ url('/pengaduan') }}">
                    <div class="bg-white px-4 py-1 shadow text-left my-4 rounded-lg">pengaduan</div>
                </a>
            </div>
            <a href="{{ url('/login') }}">
                <div class="logout">
                    <button
                        class="bg-red-500 hover:bg-red-600 text-white font-bold px-6 py-1 shadow rounded-lg">logout</button>
                </div>
            </a>
        </div>
        <!-- Dashboard Menu end -->

        <!-- Main Dashboard -->
        <div class="main-dashboard w-10/12 bg-white rounded-3xl">

            {{-- error --}}
            @include('component.eror')
            {{-- error end --}}

            <!-- Navbar -->
            @include('component.navbar')
            <!-- Navbar end -->

            <!-- Dashboard field -->
            @include('component.tambah-pengaduan')

            <div class="form p-4">
                <table action="" class="pengaduan text-center border-2 w-full">
                    <thead id="nav-data" class="nav-data">
                        <th class="font-bold border-2 py-1">no</th>
                        <th class="font-bold border-2 py-1">id_pengaduan</th>
                        <th class="font-bold border-2 py-1">id_pelanggan</th>
                        <th class="font-bold border-2 py-1">cabang</th>
                        <th class="font-bold border-2 py-1">nama</th>
                        <th class="font-bold border-2 py-1">alamat</th>
                        <th class="font-bold border-2 py-1">no_telepon</th>
                        <th class="font-bold border-2 py-1">pengaduan</th>
                        <th class="font-bold border-2 py-1">aksi</th>
                    </thead>

                    @foreach ($pengaduan as $item)
                        <tbody id="data" class="data">
                            <td class="border-2 py-1">{{ $loop->iteration }}</td>
                            <td class="border-2 py-1">{{ $item->id_pengaduan }}</td>
                            <td class="border-2 py-1">{{ $item->pelanggan->id_pelanggan }}</td>
                            <td class="border-2 py-1">{{ $item->pelanggan->cabang }}</td>
                            <td class="border-2 py-1">{{ $item->pelanggan->nama }}</td>
                            <td class="border-2 py-1">{{ $item->pelanggan->alamat }}</td>
                            <td class="border-2 py-1">{{ $item->pelanggan->no_telepon }}</td>
                            <td class="border-2 py-1">{{ $item->pengaduan }}</td>
                            <td>
                                @include('component.btn-hapus-pengaduan')
                            </td>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <!-- Dashboard field end -->
        </div>
        <!-- Main Dashboard end -->
    </div>
@endsection
