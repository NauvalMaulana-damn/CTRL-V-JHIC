{{-- resources/views/admin/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en">

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
            <div class="h-16 flex items-center justify-center border-b border-gray-200">
                <h1 class="text-2xl font-bold text-blue-600">Admin Sekolah</h1>
            </div>

            <nav class="flex-1 p-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center space-x-3 px-3 py-2 rounded-lg hover:bg-blue-50 text-blue-600 bg-blue-100">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>Dashboard</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">
                    <i class="fa-solid fa-users"></i>
                    <span>Data Siswa</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">
                    <i class="fa-solid fa-chalkboard-teacher"></i>
                    <span>Guru</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">
                    <i class="fa-solid fa-gear"></i>
                    <span>Pengaturan</span>
                </a>
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
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-semibold">Dashboard</h2>
                <p class="text-sm text-gray-500">Selamat datang, Admin 👋</p>
            </div>

            <!-- CARD GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="card bg-white shadow-md border border-gray-200">
                    <div class="card-body">
                        <h3 class="text-gray-600 font-medium">Total Siswa</h3>
                        <p class="text-3xl font-bold text-blue-600 mt-2">520</p>
                    </div>
                </div>

                <div class="card bg-white shadow-md border border-gray-200">
                    <div class="card-body">
                        <h3 class="text-gray-600 font-medium">Guru Aktif</h3>
                        <p class="text-3xl font-bold text-green-600 mt-2">35</p>
                    </div>
                </div>

                <div class="card bg-white shadow-md border border-gray-200">
                    <div class="card-body">
                        <h3 class="text-gray-600 font-medium">Kegiatan</h3>
                        <p class="text-3xl font-bold text-orange-500 mt-2">12</p>
                    </div>
                </div>

                <div class="card bg-white shadow-md border border-gray-200">
                    <div class="card-body">
                        <h3 class="text-gray-600 font-medium">Prestasi</h3>
                        <p class="text-3xl font-bold text-purple-600 mt-2">18</p>
                    </div>
                </div>
            </div>

            <!-- ANALYTICS SECTION (placeholder for Laravel analytics) -->
            <div class="mt-10 bg-white border border-gray-200 rounded-xl shadow-sm p-6">
                <h3 class="text-lg font-semibold mb-4">Statistik Pengunjung</h3>
                <div class="h-64 flex items-center justify-center text-gray-400">
                    Grafik analytics (Laravel Analytics) akan tampil di sini 📊
                </div>
            </div>
        </main>

    </div>

    <script src="https://kit.fontawesome.com/a2e0e6ad8d.js" crossorigin="anonymous"></script>
</body>

</html>
