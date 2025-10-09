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

        <!-- Daftar Offline -->
        <!-- Alur Pendaftaran OFFLINE -->
        <section class="relative mt-12">
            <img src="{{ asset('assets/bg-p-offline.png') }}" class="w-full h-40 object-cover opacity-80">
            <div class="absolute inset-0 flex items-center justify-center">
                <h2 class="text-3xl font-bold text-white">Daftar Offline</h2>
            </div>
        </section>

        <img src="{{ asset('assets/pendaftaran-offline-nobg.png') }}" alt="Hero SKARIGA"
            class="w-full h-full object-cover ">

    </div>
    </section>

    <!-- Alur Pendaftaran ONLINE -->
    <section class="relative mt-12">
        <img src="{{ asset('assets/bg-p-online.png') }}" class="w-full h-40 object-cover opacity-80">
        <div class="absolute inset-0 flex items-center justify-center">
            <h2 class="text-3xl font-bold text-white">Daftar Online</h2>
        </div>
    </section>

    <img src="{{ asset('assets/pendaftaran-online-nobg.png') }}" alt="Hero SKARIGA" class="w-full h-full object-cover ">

    </div>
    </section>

    <script>
    const labels = ['2021', '2022', '2023', '2024', '2025'];

    const chartOptions = {
        responsive: true,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        },
        elements: {
            line: {
                tension: 0.4
            } // bikin kurva smooth
        }
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

    new Chart(document.getElementById('chartPendaftar'), {
        type: 'line',
        data: pendaftarData,
        options: chartOptions
    });

    new Chart(document.getElementById('chartDiterima'), {
        type: 'line',
        data: diterimaData,
        options: chartOptions
    });
    </script>
    </div>
</x-layout>
