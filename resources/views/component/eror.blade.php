@if ($errors->any())
<div class="bg-red-600 text-white p-4 text-xl font-bold">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
