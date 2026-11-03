@extends('layouts.app')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <div>
        <h1 class="text-2xl font-bold text-slate-800">Form Pengaduan</h1>
        <p class="text-sm text-slate-500">Kirim laporan baru sesuai kategori yang dipilih.</p>
    </div>
    <a href="{{ route('dashboard', ['nama' => $nama, 'nim' => $nim]) }}" class="text-sm text-indigo-600 font-semibold hover:underline">← Kembali ke Dashboard</a>
</div>

<div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 mb-8 max-w-2xl">
    <form class="space-y-4">
        <div>
            <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Kategori Laporan</label>
            <input type="text" value="{{ $kategoriPilihan }}" readonly 
                class="w-full bg-slate-50 border rounded-lg p-2 text-sm text-slate-700 font-semibold cursor-not-allowed">
        </div>
        <div>
            <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Judul Pengaduan</label>
            <input type="text" class="w-full border rounded-lg p-2 text-sm focus:ring-2 focus:ring-indigo-500">
        </div>
        <div>
            <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Isi Laporan</label>
            <textarea rows="4" class="w-full border rounded-lg p-2 text-sm focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>
        <div>
            <button type="button" class="bg-indigo-600 text-white px-5 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition">
                Kirim Laporan
            </button>
        </div>
    </form>
</div>
@endsection