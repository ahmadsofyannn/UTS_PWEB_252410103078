@extends('layouts.app')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-800">Halo, {{ $nama }}!</h1>
    <p class="text-slate-600 mt-1">Pilih kategori layanan pengaduan di bawah ini untuk memulai pelaporan.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($kategori as $item)
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 hover:shadow-md transition flex flex-col justify-between">
        <h2 class="text-xl font-bold text-slate-800 mb-6">{{ $item['nama'] }}</h2>  
        <a href="{{ route('pengelolaan', ['nama' => $nama, 'nim' => $nim, 'kategori' => $item['nama']]) }}" 
            class="block w-full text-center bg-indigo-50 text-indigo-600 py-2.5 rounded-xl text-sm font-semibold hover:bg-indigo-600 hover:text-white transition">
            Buat Laporan
        </a>
    </div>
    @endforeach
</div>
@endsection