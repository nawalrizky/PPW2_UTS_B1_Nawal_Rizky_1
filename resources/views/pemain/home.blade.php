@extends('pemain.index')

@section('content')
<h1 class="text-3xl font-semibold text-center text-white mb-6 bg-green-700 shadow-md py-2">Daftar Pemain</h1>
<table class="w-full border-collapse border   bg-white shadow-md">
    <thead class="bg-green-700 text-white">
        <tr>
            <th class="px-4 py-2 border border-gray-300">No.</th>
            <th class="px-4 py-2 border border-gray-300">Nama Pemain</th>
            <th class="px-4 py-2 border border-gray-300">Nomer Punggung</th>
            <th class="px-4 py-2 border border-gray-300">Posisi</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 0;
        @endphp
        @foreach ($data_pemain as $pemain)
        <tr>
            <td class="px-4 py-2 border border-gray-300">{{ ++$no }}</td>
            <td class="px-4 py-2 border border-gray-300">{{ $pemain->nama_pemain }}</td>
            <td class="px-4 py-2 border border-gray-300">{{ $pemain->no_punggung }}</td>
            <td class="px-4 py-2 border border-gray-300">{{ $pemain->posisi }}</td>
           
        </tr>
        @endforeach
    </tbody>
</table>    
@endsection