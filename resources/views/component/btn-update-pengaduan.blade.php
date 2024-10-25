<form action="{{ route('pengaduan.update', $item->id_pengaduan) }}">
    <button id="openModal-edit"
        class="bg-green-400 hover:bg-green-700 text-white px-4 py-1 rounded-lg font-semibold w-full">
        {{-- tambah --}}
        <i class="bi bi-plus-circle-fill"></i>
    </button>
</form>
