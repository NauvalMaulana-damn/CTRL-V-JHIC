<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - SMK PGRI 3 Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flyonui/dist/flyonui.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/skariga300rbg.png') }}" type="image/x-icon">
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="flex h-screen">
        <!-- SIDEBAR -->
        <aside class="w-64 bg-white border-r border-gray-200 flex flex-col">
            <div class="flex flex-col items-center text-center border-b border-gray-200 p-4">
                <h1 class="text-2xl font-bold text-blue-600">Admin Sekolah</h1>
                <h2 class="text-sm text-gray-500 mt-1">Logged in as <b>{{ Auth::user()->username }}</b></h2>
            </div>

            <nav class="flex-1 p-4 space-y-2">
                <x-admin-navitem href="{{ route('admin.dashboard') }}" name="Dashboard" logo="fa-solid fa-chart-line"
                    route="admin/dashboard" />
                <x-admin-navitem href="{{ route('admin.berita.index') }}" name="Berita" logo="fa-solid fa-newspaper"
                    route="admin/berita" />
                <x-admin-navitem href="{{ route('admin.prestasi.index') }}" name="Prestasi" logo="fa-solid fa-trophy"
                    route="admin/prestasi" />
                <x-admin-navitem href="{{ route('admin.ekskul.index') }}" name="Ekstrakurikuler"
                    logo="fa-solid fa-volleyball-ball" route="admin/ekskul" />
                <x-admin-navitem href="{{ route('admin.alumni.index') }}" name="Alumni" logo="fa-solid fa-user-graduate"
                    route="admin/alumni" />
            </nav>

            <div class="p-4 border-t border-gray-200">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center justify-center bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg">
                        <i class="fa-solid fa-sign-out-alt mr-2"></i> Keluar
                    </button>
                </form>
            </div>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="flex-1 p-6 overflow-y-auto">
            {{ $slot }}
        </main>
    </div>
    <script src="https://kit.fontawesome.com/a2e0e6ad8d.js" crossorigin="anonymous"></script>
    @vite(['resources/ts/app.ts', 'resources/css/app.css'])
</body>

</html>
