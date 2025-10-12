<x-layout title="Pendaftaran - SMK">
    <div class="bg-white text-gray-800">
        <div class="container mx-auto px-4 py-6">

            <!-- Hero Section -->
            <section class="relative h-[480px] md:h-[535px] mt-2 rounded-xl overflow-hidden">
                <div class="absolute inset-0">
                    <img src="{{ asset('assets/header-pendaftaran.png') }}" alt="Hero SKARIGA" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                </div>
                <div class="absolute bottom-8 left-4 md:left-10 z-10">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white drop-shadow-lg leading-tight">DAFTAR<br>SEKARANG!</h1>
                </div>
                <div class="absolute bottom-8 right-4 md:right-10 z-10 flex flex-col sm:flex-row gap-3">
                    <a href="https://wa.me/6282133000370" class="btn-pend bg-gray-600 text-white px-6 sm:px-8 py-3 rounded-full text-base sm:text-lg font-semibold hover:bg-green-700 transition shadow-lg text-center">CHAT ADMIN</a>
                    <button data-target="dafOn" class="btn-pend bg-gray-500 text-white px-5 sm:px-6 py-3 rounded-full text-base sm:text-lg font-semibold hover:bg-orange-600 transition shadow-lg">DAFTAR ONLINE</button>
                    <button data-target="dafOff" class="btn-pend bg-gray-500 text-white px-5 sm:px-6 py-3 rounded-full text-base sm:text-lg font-semibold hover:bg-blue-600 transition shadow-lg">DAFTAR OFFLINE</button>
                </div>
            </section>

            <!-- Grafik -->
            <section class="max-w-screen-2xl mx-auto py-10 px-4 md:px-10">
                <div class="bg-white rounded-2xl shadow p-5">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4 text-center">Perbandingan Pendaftar dan Peserta Diterima</h2>
                    <canvas id="chartGabungan"></canvas>
                </div>
            </section>

            <!-- Daftar Offline / Online -->
            <div class="flex flex-col md:flex-row justify-center items-start mt-12 gap-10">

                <div class="w-full md:w-1/2">
                    <section class="relative" id="dafOff">
                        <img src="{{ asset('assets/bg-p-offline.png') }}" class="w-full h-40 object-cover opacity-80" alt="Daftar Offline">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-black/30 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <h2 class="text-3xl md:text-4xl font-bold text-white">Daftar Offline</h2>
                        </div>
                    </section>
                    <img src="{{ asset('assets/pendaftaran-offline-nobg.png') }}" alt="Offline" class="w-full h-auto object-contain md:ml-10 mt-3">
                </div>

                <div class="w-full md:w-1/2">
                    <section class="relative" id="dafOn">
                        <img src="{{ asset('assets/bg-p-online.png') }}" class="w-full h-40 object-cover opacity-80" alt="Daftar Online">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-black/30 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <h2 class="text-3xl md:text-4xl font-bold text-white">Daftar Online</h2>
                        </div>
                    </section>
                    <div class="md:mr-5 mt-3">
                        <img src="{{ asset('assets/pend-onl-nobg.png') }}" alt="Online" class="w-full h-auto object-contain">
                    </div>
                </div>

            </div>

            <!-- Keuntungan -->
            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4">Keuntungan Bergabung Dengan Kami</h2>
                        <p class="text-base md:text-xl text-gray-600 max-w-3xl mx-auto">Dapatkan berbagai benefit eksklusif ketika Anda mendaftar di SMK PGRI 3 MALANG</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
                            <div class="w-16 h-16 bg-orange-500 rounded-2xl flex items-center justify-center mb-6"><i class="fas fa-certificate text-white text-2xl"></i></div>
                            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Bonus Spesial</h3>
                            <ul class="space-y-2 text-sm md:text-base">
                                <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-2"></i>Tablet</li>
                                <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-2"></i>Tas Laptop</li>
                                <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-2"></i>Rekreasi Kelulusan</li>
                                <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-2"></i>Outbond</li>
                            </ul>
                        </div>

                        <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
                            <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center mb-6"><i class="fas fa-graduation-cap text-white text-2xl"></i></div>
                            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">6 Seragam Sekolah</h3>
                            <ul class="space-y-2 text-sm md:text-base">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Abu Abu Putih</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Jeans</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Pramuka</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Olahraga</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Wearpack (Praktik)</li>
                            </ul>
                        </div>

                        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
                            <div class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center mb-6"><i class="fas fa-shirt text-white text-2xl"></i></div>
                            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Seragam Tambahan</h3>
                            <ul class="space-y-2 text-sm md:text-base">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>2 pcs Baju PKL</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>2 pcs Baju MPLS (KCS)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-center gap-8 mt-8">
                        <div class="w-full md:w-[45%] lg:w-[30%] bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
                            <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mb-6"><i class="fas fa-tools text-white text-2xl"></i></div>
                            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Kelengkapan Seragam</h3>
                            <ul class="space-y-2 text-sm md:text-base">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Topi</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Hasduk</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Ikat Pinggang</li>
                            </ul>
                        </div>

                        <div class="w-full md:w-[45%] lg:w-[30%] bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
                            <div class="w-16 h-16 bg-orange-500 rounded-2xl flex items-center justify-center mb-6"><i class="fas fa-ticket text-white text-2xl"></i></div>
                            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Sertifikasi Kompetensi</h3>
                            <ul class="space-y-2 text-sm md:text-base">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Paket Pelatihan Mengemudi Mobil</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Paket Diklat Pembentukan Karakter</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Pembekalan Pra Kerja</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Ujian Sertifikasi Kompetensi</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>SIM A</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-layout>
