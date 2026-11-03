@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 flex items-center space-x-4">
        <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-indigo-100 shadow-sm shrink-0">
            <img src="{{ asset('images/sofyan.jpg') }}" alt="Foto Profil" class="w-full h-full object-cover">
        </div>
        <div>
            <h1 class="text-2xl font-bold text-slate-800">{{ $nama }}</h1>
            <p class="text-sm text-slate-500">NIM: {{ $nim }}</p>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="p-4 border-b border-slate-100 font-bold text-slate-800">Daftar Pengaduan Saya</div>
        <table class="w-full text-left border-collapse text-sm">
            <thead>
                <tr class="bg-slate-50 text-slate-500 uppercase text-xs border-b">
                    <th class="p-4">ID</th>
                    <th class="p-4">Kategori</th>
                    <th class="p-4">Judul Pengaduan</th>
                    <th class="p-4">Tanggal</th>
                    <th class="p-4">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @foreach($laporan as $item)
                <tr class="hover:bg-slate-50/50">
                    <td class="p-4 font-mono text-slate-400 text-xs">{{ $item['id'] }}</td>
                    <td class="p-4 font-medium text-slate-700">{{ $item['kategori'] }}</td>
                    <td class="p-4 font-semibold text-slate-800">{{ $item['judul'] }}</td>
                    <td class="p-4 text-slate-500 text-xs">{{ $item['tanggal'] }}</td>
                    <td class="p-4">
                        <span class="px-2.5 py-1 rounded-full text-xs font-semibold
                            {{ $item['status'] == 'Selesai' ? 'bg-emerald-100 text-emerald-700' : ($item['status'] == 'Proses' ? 'bg-amber-100 text-amber-700' : 'bg-rose-100 text-rose-700') }}">
                            {{ $item['status'] }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection