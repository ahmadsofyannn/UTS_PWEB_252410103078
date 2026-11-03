<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LaporKampus</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-96 border border-slate-200">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-indigo-600">LaporKampus</h1>
        </div>

        @if($errors->any())
            <div class="mb-4 p-3 bg-rose-50 border border-rose-200 text-rose-600 text-xs rounded-lg">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-semibold mb-1 text-slate-700">NIM</label>
                <input type="text" name="nim" required 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-1 text-slate-700">Kata Sandi</label>
                <input type="password" name="password" required 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
            </div>
            <button type="submit" 
                class="w-full bg-indigo-600 text-white py-2.5 rounded-lg font-semibold hover:bg-indigo-700 transition text-sm shadow-md">
                Masuk
            </button>
        </form>
    </div>
</body>
</html>