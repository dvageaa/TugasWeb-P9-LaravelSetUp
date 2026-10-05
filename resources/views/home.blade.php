<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md">
        <h1 class="text-3xl font-bold text-slate-800">Halo, {{ $nama }}! 👋</h1>
        <p class="mt-4 text-slate-600">Mata kuliah yang sedang kupelajari:</p>
        <ul class="mt-2 list-disc list-inside text-slate-700">
            @foreach ($matkul as $m)
                <li>{{ $m }}</li>
            @endforeach
        </ul>
        <div class="mt-6 flex gap-4">
            <a href="/about" class="text-blue-600 hover:underline">Tentang</a>
            <a href="/contact" class="text-blue-600 hover:underline">Kontak</a>
        </div>
    </div>
</body>
</html>