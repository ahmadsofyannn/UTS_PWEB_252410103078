<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporKampus - Portal Pelaporan Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen font-sans">

    
    <x-navbar :nama="$nama ?? 'Ahmad Sofyan'" :nim="$nim ?? '252410103078'" />

    
    <main class="grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    
    <x-footer />

</body>
</html>