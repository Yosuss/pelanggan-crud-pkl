<form action="{{ route('pelanggan.edit', $item->id_pelanggan) }}">
    <button id="openModal-edit"
        class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-1 rounded-lg font-semibold w-full">
        {{-- edit --}}
        <i class="bi bi-pencil-fill"></i>
    </button>
</form>
