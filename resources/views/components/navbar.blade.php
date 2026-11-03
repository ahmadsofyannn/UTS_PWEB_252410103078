@props(['nama' => 'Ahmad Sofyan', 'nim' => '252410103078'])
<header class="bg-indigo-600 text-white shadow-md">
    <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="font-bold text-xl flex items-center gap-2">
            <span>LaporKampus</span>
        </div>
        <div class="space-x-6 text-sm font-medium">
            <a href="{{ route('dashboard', ['nama' => $nama, 'nim' => $nim]) }}" class="hover:text-indigo-200 transition">Dashboard</a>
            <a href="{{ route('profile', ['nama' => $nama, 'nim' => $nim]) }}" class="hover:text-indigo-200 transition">Profil Saya</a>
            <a href="{{ route('login') }}" class="bg-indigo-700 px-3 py-1.5 rounded-lg hover:bg-indigo-800 transition text-rose-200">Keluar</a>
        </div>
    </nav>
</header>