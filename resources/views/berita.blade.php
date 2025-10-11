<x-layout title="Berita Skariga">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .bg-skariga-blue {
            background-color: #1e3a8a;
        }

        .bg-skariga-orange {
            background-color: #f97316;
        }

        .text-skariga-blue {
            color: #1e3a8a;
        }

        .text-skariga-orange {
            color: #f97316;
        }

        .border-skariga-blue {
            border-color: #1e3a8a;
        }

        .border-skariga-orange {
            border-color: #f97316;
        }

        .hover-bg-skariga-orange:hover {
            background-color: #f97316;
        }

        .hover-bg-skariga-blue:hover {
            background-color: #1e3a8a;
        }
    </style>
    <div class="bg-gray-50">
        <section class="bg-gradient-to-r from-skariga-blue to-blue-800 text-white py-12">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl">
                    <h1 class="text-4xl font-bold mb-4">Berita Terkini Skariga</h1>
                    <p class="text-lg mb-6">Ikuti perkembangan terbaru seputar kegiatan, prestasi, dan informasi penting
                        dari SMK PGRI 3 Malang.</p>
                    <div class="flex space-x-4">
                        <button
                            class="bg-skariga-orange hover:bg-orange-600 text-white px-6 py-2 rounded-lg font-semibold transition-colors">
                            <i class="fas fa-newspaper mr-2"></i>Semua Berita
                        </button>
                        <button
                            class="bg-white text-skariga-blue hover:bg-gray-100 px-6 py-2 rounded-lg font-semibold transition-colors">
                            <i class="fas fa-calendar-alt mr-2"></i>Kalender Akademik
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <main class="container mx-auto px-4 py-8">
            <!-- Filter Section -->
            <div class="flex flex-wrap justify-between items-center mb-8 bg-white p-4 rounded-lg shadow">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-xl font-bold text-skariga-blue">Kumpulan Berita</h2>
                    <p class="text-gray-600">Temukan informasi terbaru dari sekolah</p>
                </div>

                <div class="flex flex-wrap gap-2">
                    <button class="bg-skariga-blue text-white px-4 py-2 rounded-lg text-sm font-medium">Semua</button>
                    <button
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium">Prestasi</button>
                    <button
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium">Kegiatan</button>
                    <button
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium">Pengumuman</button>
                    <button
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium">Acara</button>
                </div>
            </div>

            <!-- News Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <!-- Berita 1 -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-r from-skariga-blue to-blue-700 relative">
                        <span
                            class="absolute top-4 left-4 bg-skariga-orange text-white px-3 py-1 rounded-full text-xs font-semibold">Prestasi</span>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="text-sm"><i class="far fa-calendar mr-1"></i>15 Oktober 2023</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-skariga-blue mb-3">Siswa Skariga Juara 1 Lomba Web Design
                            Tingkat Nasional</h3>
                        <p class="text-gray-600 mb-4">Tim siswa SMK PGRI 3 Malang berhasil meraih juara 1 dalam
                            kompetisi web design tingkat nasional yang diselenggarakan oleh Kementerian Pendidikan.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-skariga-orange font-semibold hover:underline">Baca
                                Selengkapnya</a>
                            <span class="text-gray-500 text-sm"><i class="far fa-eye mr-1"></i>245</span>
                        </div>
                    </div>
                </div>

                <!-- Berita 2 -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-r from-skariga-orange to-orange-500 relative">
                        <span
                            class="absolute top-4 left-4 bg-skariga-blue text-white px-3 py-1 rounded-full text-xs font-semibold">Kegiatan</span>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="text-sm"><i class="far fa-calendar mr-1"></i>12 Oktober 2023</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-skariga-blue mb-3">Workshop Kewirausahaan untuk Siswa Kelas
                            XII</h3>
                        <p class="text-gray-600 mb-4">Sebagai persiapan memasuki dunia kerja, sekolah mengadakan
                            workshop kewirausahaan dengan menghadirkan praktisi industri ternama.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-skariga-orange font-semibold hover:underline">Baca
                                Selengkapnya</a>
                            <span class="text-gray-500 text-sm"><i class="far fa-eye mr-1"></i>189</span>
                        </div>
                    </div>
                </div>

                <!-- Berita 3 -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-r from-blue-600 to-skariga-blue relative">
                        <span
                            class="absolute top-4 left-4 bg-skariga-orange text-white px-3 py-1 rounded-full text-xs font-semibold">Pengumuman</span>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="text-sm"><i class="far fa-calendar mr-1"></i>10 Oktober 2023</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-skariga-blue mb-3">Penerimaan Peserta Didik Baru Tahun Ajaran
                            2024/2025</h3>
                        <p class="text-gray-600 mb-4">Pendaftaran calon peserta didik baru untuk tahun ajaran 2024/2025
                            akan dibuka mulai 1 November 2023. Simak informasi lengkapnya di sini.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-skariga-orange font-semibold hover:underline">Baca
                                Selengkapnya</a>
                            <span class="text-gray-500 text-sm"><i class="far fa-eye mr-1"></i>356</span>
                        </div>
                    </div>
                </div>

                <!-- Berita 4 -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-r from-orange-500 to-skariga-orange relative">
                        <span
                            class="absolute top-4 left-4 bg-skariga-blue text-white px-3 py-1 rounded-full text-xs font-semibold">Acara</span>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="text-sm"><i class="far fa-calendar mr-1"></i>8 Oktober 2023</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-skariga-blue mb-3">Peringatan Hari Sumpah Pemuda dengan
                            Berbagai Lomba</h3>
                        <p class="text-gray-600 mb-4">Dalam rangka memperingati Hari Sumpah Pemuda, OSIS SMK PGRI 3
                            Malang mengadakan berbagai lomba untuk meningkatkan semangat kebangsaan.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-skariga-orange font-semibold hover:underline">Baca
                                Selengkapnya</a>
                            <span class="text-gray-500 text-sm"><i class="far fa-eye mr-1"></i>278</span>
                        </div>
                    </div>
                </div>

                <!-- Berita 5 -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-r from-skariga-blue to-blue-800 relative">
                        <span
                            class="absolute top-4 left-4 bg-skariga-orange text-white px-3 py-1 rounded-full text-xs font-semibold">Prestasi</span>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="text-sm"><i class="far fa-calendar mr-1"></i>5 Oktober 2023</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-skariga-blue mb-3">Tim Robotik Skariga Raih Medali Perunggu di
                            Kompetisi Internasional</h3>
                        <p class="text-gray-600 mb-4">Tim robotik SMK PGRI 3 Malang berhasil mengharumkan nama Indonesia
                            dengan meraih medali perunggu dalam kompetisi robotik internasional di Singapura.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-skariga-orange font-semibold hover:underline">Baca
                                Selengkapnya</a>
                            <span class="text-gray-500 text-sm"><i class="far fa-eye mr-1"></i>421</span>
                        </div>
                    </div>
                </div>

                <!-- Berita 6 -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-r from-skariga-orange to-orange-600 relative">
                        <span
                            class="absolute top-4 left-4 bg-skariga-blue text-white px-3 py-1 rounded-full text-xs font-semibold">Kegiatan</span>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="text-sm"><i class="far fa-calendar mr-1"></i>1 Oktober 2023</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-skariga-blue mb-3">Kunjungan Industri ke Perusahaan Teknologi
                            Terkemuka</h3>
                        <p class="text-gray-600 mb-4">Siswa jurusan Teknik Komputer dan Jaringan melakukan kunjungan
                            industri ke perusahaan teknologi terkemuka untuk menambah wawasan tentang dunia kerja.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-skariga-orange font-semibold hover:underline">Baca
                                Selengkapnya</a>
                            <span class="text-gray-500 text-sm"><i class="far fa-eye mr-1"></i>198</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mb-12">
                <div class="flex space-x-2">
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-skariga-blue text-white">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-skariga-blue text-white">1</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300">2</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300">3</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </main>


    </div>
</x-layout>
