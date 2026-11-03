<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'password' => 'required'
        ]);

        $dummyNim = '252410103078';
        $dummyPass = 'qwertyuiop';
        $dummyNama = 'Ahmad Sofyan';

        if (strlen($request->nim) !== 12 || $request->nim !== $dummyNim || $request->password !== $dummyPass) {
            return back()->withErrors(['error' => 'NIM harus 12 digit dan sesuai dengan data akun!']);
        }

        
        return redirect()->route('dashboard', ['nama' => $dummyNama, 'nim' => $dummyNim]);
    }

    public function dashboard(string $nama, string $nim)
    {
        $kategori = [
            ['nama' => 'Fasilitas Kampus'],
            ['nama' => 'Anti-Bullying & Kekerasan'],
            ['nama' => 'Layanan Akademik'],
        ];

        return view('dashboard', compact('nama', 'nim', 'kategori'));
    }

    public function pengelolaan(Request $request, string $nama, string $nim)
    {
        $kategoriPilihan = $request->query('kategori', 'Fasilitas Kampus');

        return view('pengelolaan', compact('nama', 'nim', 'kategoriPilihan'));
    }

    public function profile(string $nama, string $nim)
    {
        $laporan = [
            [
                'id' => 'LAP-001',
                'kategori' => 'Fasilitas Kampus',
                'judul' => 'Proyektor di Ruang Teater Lt. 2 Mati Total',
                'tanggal' => '02 Nov 2026',
                'status' => 'Proses'
            ],
            [
                'id' => 'LAP-002',
                'kategori' => 'Anti-Bullying & Kekerasan',
                'judul' => 'Laporan Tindak Perundungan di Area Kampus',
                'tanggal' => '01 Nov 2026',
                'status' => 'Pending'
            ],
        ];

        return view('profile', compact('nama', 'nim', 'laporan'));
    }
}