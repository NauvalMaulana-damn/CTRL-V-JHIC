<x-layout title="Pendaftaran - SMK">
    <div class="bg-white text-gray-800">

        <!-- Hero Section -->
        <section class="relative  h-[535px] mt-2 mx-2 md:mx-10  rounded-xl overflow-hidden">
            <div class="absolute inset-0 w-full h-full hover-scale">
                {{-- <div class="absolute inset-0 bg-gradient-to-t from-transparent via-black/5 to-black/70"></div> --}}
                <img src="{{ asset('assets/header-pendaftaran.png') }}" alt="Hero SKARIGA"
                    class="w-full h-full object-cover ">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
            </div>
            <div class="absolute bottom-8 left-3.5 md:left-10 z-10">
                <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-lg hover-scale">
                    DAFTAR
                </h1>
                <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-lg hover-scale">
                    SEKARANG!
                </h1>
            </div>

            {{-- tombol header --}}
            <div class="absolute bottom-8 right-3.5 md:right-10 z-10 flex flex-col items-center gap-3">
                <div class="flex gap-4">
                    <button
                        class="bg-gray-600 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-green-700 transition shadow-lg">
                        CHAT ADMIN
                    </button>
                    <button
                        class="bg-gray-500 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-orange-600 transition shadow-lg">
                        DAFTAR ONLINE
                    </button>
                    <button
                        class="bg-gray-500 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-blue-600 transition shadow-lg">
                        DAFTAR OFFLINE
                    </button>
                </div>
            </div>

            <!-- Tombol CHAT ADMIN di atas tengah -->

            <!-- Dua tombol daftar di bawah -->

    </div>
    </section>

    <!-- Grafik Section -->
    <section class="py-10 px-4 md:px-10 grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Pendaftar -->
        <div class="bg-white rounded-2xl shadow p-5">
            <h2 class="text-xl font-semibold mb-4">Data Pendaftar</h2>
            <canvas id="chartPendaftar"></canvas>
        </div>
        <!-- Peserta Diterima -->
        <div class="bg-white rounded-2xl shadow p-5">
            <h2 class="text-xl font-semibold mb-4">Data Peserta Diterima</h2>
            <canvas id="chartDiterima"></canvas>
        </div>
    </section>

    <!-- Wrapper -->
<div class="flex flex-col md:flex-row justify-center items-start mt-12">

    <!-- Daftar Offline -->
    <div class="w-full md:w-1/2">
        <section class="relative">
            <img src="{{ asset('assets/bg-p-offline.png') }}" class="w-full h-40 object-cover opacity-80">
            <div class="absolute inset-0 flex items-center justify-center">
                <h2 class="text-3xl font-bold text-white">Daftar Offline</h2>
            </div>
        </section>
        <img src="{{ asset('assets/pendaftaran-offline-nobg.png') }}" alt="Hero SKARIGA" class="w-full h-auto object-cover">
    </div>

    <!-- Daftar Online -->
    <div class="w-full md:w-1/2">
        <section class="relative">
            <img src="{{ asset('assets/bg-p-online.png') }}" class="w-full h-40 object-cover opacity-80">
            <div class="absolute inset-0 flex items-center justify-center">
                <h2 class="text-3xl font-bold text-white">Daftar Online</h2>
            </div>
        </section>
        <img src="{{ asset('assets/nobg-p-online.png') }}" alt="Hero SKARIGA" class="w-full h-auto object-cover">
    </div>

</div>


    <div class="bg-gray-50">
        <!-- Benefits Section -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <!-- Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                        Keuntungan Bergabung Dengan Kami
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Dapatkan berbagai benefit eksklusif ketika Anda mendaftar di SMK PGRI 3 MALANG
                    </p>
                </div>

                <!-- Benefits Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Benefit 1 -->
                    <div
                        class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-graduation-cap text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Pendidikan Berkualitas</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Kurikulum terupdate sesuai industri</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Pengajar profesional dan berpengalaman</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Fasilitas pembelajaran lengkap</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Benefit 2 -->
                    <div
                        class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-briefcase text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Peluang Karir Luas</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Program magang di perusahaan ternama</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Jaminan penempatan kerja setelah lulus</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Koneksi dengan industri partner</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Benefit 3 -->
                    <div
                        class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-tools text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Fasilitas Lengkap</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Laboratorium praktik modern</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Perpustakaan digital</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Wifi area seluruh kampus</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Benefit 4 -->
                    <div
                        class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-orange-500 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-certificate text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Sertifikasi Kompetensi</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Sertifikasi BNSP</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Sertifikasi industri</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Sertifikat keahlian internasional</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Benefit 5 -->
                    <div
                        class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-red-500 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-hand-holding-usd text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Beasiswa & Bantuan</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Beasiswa prestasi</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Beasiswa untuk siswa berprestasi</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Keringanan biaya pendidikan</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Benefit 6 -->
                    <div
                        class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-indigo-500 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-users text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Komunitas & Networking</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Alumni network yang kuat</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Komunitas hobi dan minat</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>Event networking dengan industri</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const labels = ['2021', '2022', '2023', '2024', '2025'];
    const chartOptions = {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } },
        elements: { line: { tension: 0.4 } }
    };
    const pendaftarData = {
        labels,
        datasets: [{
            label: 'Pendaftar',
            data: [200, 350, 400, 500, 620],
            borderColor: '#f97316',
            backgroundColor: '#f97316',
            fill: false
        }]
    };
    const diterimaData = {
        labels,
        datasets: [{
            label: 'Peserta Diterima',
            data: [150, 300, 320, 450, 560],
            borderColor: '#3b82f6',
            backgroundColor: '#3b82f6',
            fill: false
        }]
    };
    new Chart(document.getElementById('chartPendaftar'), { type: 'line', data: pendaftarData, options: chartOptions });
    new Chart(document.getElementById('chartDiterima'), { type: 'line', data: diterimaData, options: chartOptions });
</script>
    </div>
</x-layout>
