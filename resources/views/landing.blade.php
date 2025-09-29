<x-layout title="SMK PGRI 3 Malang - Success by Discipline">
    <!-- Loading overlay
    <div id="loading"
        class="fixed inset-0 bg-white z-50 flex items-center justify-center transition-opacity duration-500">
        <div class="text-center">
            <div class="w-16 h-16 border-4 border-t-customOrange border-gray-200 rounded-full animate-spin mx-auto">
            </div>
            <p class="mt-4 text-lg font-semibold">SMK PGRI 3 Malang</p>
        </div>
    </div> -->

    <!-- Main content with news sidebar -->
    <div class="flex flex-col h-full h-max-content lg:flex-row container mx-auto px-4 py-6">
        <!-- Main content -->
        <main class="w-full lg:w-3/4 animate-fade-in">
            <!-- Hero Section -->
            <section class="relative w-full overflow-hidden rounded-xl mb-8">
                <div class="swiper mySwiper rounded-xl overflow-hidden">
                    <div class="swiper-wrapper">
                        <section class="swiper-slide relative w-full h-full">
                            <img width="100%" height="100%"
                                class="w-full h-[40vh] sm:h-[50vh] md:h-[60vh] lg:h-[70vh] object-cover"
                                src="{{ asset('assets/head_news_1.png') }}" alt="head_news_1.png">
                            <div class="absolute bottom-0 left-0 w-full h-1/2 gradient-overlay"></div>
                            <div class="absolute bottom-6 left-5 md:left-8 text-white max-w-4xl">
                                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2">PARA SISWA
                                    MENJUARAI LKS DIKMEN JATIM XXXII</h1>
                                <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold">BERBAGAI BIDANG MEREKA
                                    TAKLUKAN DENGAN POSISI JUARA 1</p>
                            </div>
                        </section>
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!-- News Ticker -->
            <div class="py-4 overflow-hidden rounded-lg mb-8 animate-fade-in delay-100">
                <div class="scroll-container flex whitespace-nowrap animate-scroll">
                    <div class="flex space-x-8 md:space-x-12 pr-12">
                        <!-- Logo asli -->
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/alfa logo 1.png') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/b&d icon 1.png') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/lg icon 1.png') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/pjb icon 1.png') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block"
                            src="{{ asset('assets/daihat logo 1.png') }}" alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/Honda_Logo.svg') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block"
                            src="{{ asset('assets/kompas logo.svg') }}" alt="Kompas Logo">
                        <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block"
                            src="{{ asset('assets/Polytron logo.png') }}" alt="Polytron Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/auto 2000.webp') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/Ahass logo.png') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block"
                            src="{{ asset('assets/yamaha logo.png') }}" alt="Yamaha Logo">

                        <!-- Logo duplikat untuk looping mulus -->
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/alfa logo 1.png') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/b&d icon 1.png') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/lg icon 1.png') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/pjb icon 1.png') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block"
                            src="{{ asset('assets/daihat logo 1.png') }}" alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/Honda_Logo.svg') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block"
                            src="{{ asset('assets/kompas logo.svg') }}" alt="Kompas Logo">
                        <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block"
                            src="{{ asset('assets/Polytron logo.png') }}" alt="Polytron Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/auto 2000.webp') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="{{ asset('assets/Ahass logo.png') }}"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block"
                            src="{{ asset('assets/yamaha logo.png') }}" alt="Yamaha Logo">
                    </div>
                </div>
            </div>

            <!-- width && height = 100%, lg:w-2/5 -->
            <!-- Department Sections -->
            <section class="py-6 md:py-10 animate-fade-in delay-200">
                <!-- Elektro Department -->
                <div class="flex flex-col lg:flex-row gap-6 mb-12">
                    <div class="w-full lg:w-2/5 department-card bg-customOrange p-5 md:p-6 relative overflow-hidden">
                        <div class="info-card bg-white p-2 mb-5 md:mb-6">
                            <img width="25%" height="25%" class="w-full h-auto rounded-2xl"
                                src="{{ asset('assets/elektro_card.png') }}" alt="Elektro Department">
                        </div>
                        <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-4 md:mb-6">Elektro</h2>
                        <p class="text-white text-base md:text-lg mb-6 md:mb-8">
                            Departemen Elektronika mempelajari dasar-dasar rangkaian listrik, komponen elektronik, dan
                            sistem digital.
                            Juga mencakup perakitan, pemrograman mikrokontroller, serta pengendalian otomatis.
                            Keselamatan kerja,
                            troubleshooting, dan teknologi embedded menjadi fokus penting.
                        </p>
                        <button
                            class="bg-white text-[#242424] text-base md:text-lg font-medium py-2 px-6 md:px-8 rounded-full hover:bg-gray-100 transition">
                            Selengkapnya
                        </button>
                        <img width="100%" height="100%"
                            class="absolute -bottom-2 -right-6 w-64 md:w-72 opacity-35 -rotate-12"
                            src="{{ asset('assets/bg_elektro_card.png') }}" alt="Decoration">
                    </div>

                    <!-- Otomotif Department -->
                    <div class="w-full lg:w-2/5 department-card bg-customRed p-5 md:p-6 relative overflow-hidden">
                        <div class="info-card bg-white p-2 mb-5 md:mb-6">
                            <img width="25%" height="25%" class="w-full h-auto rounded-2xl"
                                src="{{ asset('assets/otomotif_card.png') }}" alt="Otomotif Department">
                        </div>
                        <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-4 md:mb-6">Otomotif</h2>
                        <p class="text-white text-base md:text-lg mb-6 md:mb-8">
                            Departemen Otomotif mempelajari teori sistem kendaraan seperti mesin, transmisi,
                            kelistrikan, bodi, dan
                            suspensi. Lalu mempraktikkannya di bengkel yang akan dibimbing oleh guru pengajar. Mencakup
                            perawatan,
                            perbaikan, dan diagnosa kerusakan kendaraan secara teknis.
                        </p>
                        <button
                            class="bg-white text-[#242424] text-base md:text-lg font-medium py-2 px-6 md:px-8 rounded-full hover:bg-gray-100 transition">
                            Selengkapnya
                        </button>
                        <img width="100%" height="100%"
                            class="absolute -bottom-2 -right-6 w-64 md:w-72 opacity-60 -rotate-12"
                            src="{{ asset('assets/bg_otomotif_card.png') }}" alt="Decoration">
                    </div>
                </div>

                <!-- Second Row Departments -->
                <div class="flex flex-col lg:flex-row gap-6">
                    <!-- Pemesinan Department -->
                    <div class="w-full lg:w-2/5 department-card bg-customPink p-5 md:p-6 relative overflow-hidden">
                        <div class="info-card bg-white p-2 mb-5 md:mb-6">
                            <img width="25%" height="25%" class="w-full h-auto rounded-2xl"
                                src="{{ asset('assets/pemesinan_card.jpg') }}" alt="Pemesinan Department">
                        </div>
                        <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-4 md:mb-6">Pemesinan</h2>
                        <p class="text-white text-base md:text-lg mb-6 md:mb-8">
                            Departemen Pemesinan mempelajari teknik pengoperasian mesin produksi seperti bubut, frais,
                            dan CNC. Juga
                            mencakup gambar teknik, perencanaan proses manufaktur, serta kontrol kualitas produk.
                            Material teknik,
                            keselamatan kerja, dan pemeliharaan mesin menjadi bagian penting dalam praktik industri.
                        </p>
                        <button
                            class="bg-white text-[#242424] text-base md:text-lg font-medium py-2 px-6 md:px-8 rounded-full hover:bg-gray-100 transition">
                            Selengkapnya
                        </button>
                        <img width="100%" height="100%"
                            class="absolute -bottom-2 -right-6 w-64 md:w-72 opacity-60 -rotate-12"
                            src="{{ asset('assets/bg_pemesinan_card.png') }}" alt="Decoration">
                    </div>

                    <!-- TIK Department -->
                    <div class="w-full lg:w-2/5 department-card bg-customBlue p-5 md:p-6 relative overflow-hidden">
                        <div class="info-card bg-white p-2 mb-5 md:mb-6">
                            <img width="25%" height="25%" class="w-full h-auto rounded-2xl"
                                src="{{ asset('assets/tik_card.png') }}" alt="TIK Department">
                        </div>
                        <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-4 md:mb-6">TIK</h2>
                        <p class="text-white text-base md:text-lg mb-6 md:mb-8">
                            Departemen TIK atau Teknologi Informasi dan Komunikasi mempelajari pemrograman, jaringan
                            komputer, dan
                            teknologi komunikasi digital. Juga mencakup analisis data, kecerdasan buatan, serta
                            manajemen proyek TI.
                            Etika teknologi dan dokumentasi teknis diajarkan untuk penggunaan yang profesional.
                        </p>
                        <button
                            class="bg-white text-[#242424] text-base md:text-lg font-medium py-2 px-6 md:px-8 rounded-full hover:bg-gray-100 transition">
                            Selengkapnya
                        </button>
                        <img width="100%" height="100%"
                            class="absolute -bottom-2 -right-6 w-64 md:w-72 opacity-35 -rotate-12"
                            src="{{ asset('assets/bg_tik_card.png') }}" alt="Decoration">
                    </div>
                </div>
            </section>

            <!-- Student Habits Section -->
            <section class="bg-gray-200 py-12 rounded-xl mt-8 animate-fade-in delay-300">
                <div class="container mx-auto px-4">
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-bold text-center mb-8 md:mb-12">3 KEBIASAAN MURID
                        SKARIGA</h2>
                    <div class="flex flex-col lg:flex-row items-center gap-6 justify-center">
                        <!-- Habit 1 -->
                        <div
                            class="w-full lg:w-1/3 habit-card bg-gray-300 p-5 flex flex-col rounded-xl transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                            <img class="w-full h-52 md:h-48 object-cover rounded-lg mb-4"
                                src="{{ asset('assets/cekkelengkapan.png') }}" alt="Cek Kelengkapan Seragam">
                            <h3 class="text-xl md:text-2xl font-bold text-center mb-3">Cek Kelengkapan Seragam</h3>
                            <p class="text-base text-center">
                                Sebelum memasuki sekolah, siswa wajib menunjukan kelengkapan seragam
                            </p>
                        </div>

                        <!-- Habit 2 (lebih tinggi) -->
                        <div
                            class="w-full lg:w-2/5 habit-card bg-slate-300 p-6 flex flex-col rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-2xl z-10 min-h-[520px]">
                            <img class="w-full h-64 object-cover rounded-lg mb-4"
                                src="{{ asset('assets/jalur_hijau.png') }}" alt="Jalur Hijau">
                            <h3 class="text-2xl md:text-3xl font-bold text-center mb-3">Jalur Hijau</h3>
                            <p class="text-base md:text-lg text-center">
                                SKARIGA selalu membiasakan warga sekolah untuk berjalan di jalur hijau, seperti yang
                                diterapkan di industri
                            </p>
                        </div>

                        <!-- Habit 3 -->
                        <div
                            class="w-full lg:w-1/3 habit-card bg-gray-300 p-5 flex flex-col rounded-xl transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                            <img class="w-full h-52 md:h-48 object-cover rounded-lg mb-4"
                                src="{{ asset('assets/mengaji_pagi.png') }}" alt="Mengaji Pagi">
                            <h3 class="text-xl md:text-2xl font-bold text-center mb-3">Mengaji Pagi</h3>
                            <p class="text-base text-center">
                                Bagi siswa muslim, SKARIGA mengadakan mengaji pagi bersama, seperti membaca juz amma,
                                dan doa pagi.
                                Bagi non Muslim SKARIGA memberi tempat untuk beribadah pagi
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- News Sidebar (Not fixed) -->
        <aside class="w-full lg:w-1/4 lg:pl-8 mt-8 lg:mt-0 animate-fade-in delay-400">
            <div class="bg-white p-5 rounded-xl shadow-md">
                <h3 class="font-bold text-xl mb-4 border-b-2 border-customOrange pb-2">Berita Terbaru</h3>
                <div class="space-y-6">
                    <div class="group cursor-pointer">
                        <img width="100%" height="100%"
                            class="w-full h-40 object-cover rounded-lg mb-2 group-hover:opacity-90 transition"
                            src="{{ asset('assets/gurupramuka.png') }}" alt="News Image">
                        <p class="text-sm font-semibold group-hover:text-customOrange transition">Guru Turut Jadi
                            Peserta
                            dalam Perkemahan Pramuka Penegak</p>
                    </div>
                    <div class="group cursor-pointer">
                        <img width="100%" height="100%"
                            class="w-full h-40 object-cover rounded-lg mb-2 group-hover:opacity-90 transition"
                            src="{{ asset('assets/agustusan.png') }}" alt="News Image">
                        <p class="text-sm font-semibold group-hover:text-customOrange transition">Sambut Hari
                            Kemerdekaan,
                            SKARIGA Gelar Jalan Sehat dan Aneka Lomba Penuh Semangat</p>
                    </div>
                    <div class="group cursor-pointer">
                        <img width="100%" height="100%"
                            class="w-full h-40 object-cover rounded-lg mb-2 group-hover:opacity-90 transition"
                            src="{{ asset('assets/kcs38.png') }}" alt="News Image">
                        <p class="text-sm font-semibold group-hover:text-customOrange transition">Pusdikarhanud Galakkan
                            Gerakan Cinta Sekolah untuk Bentuk Karakter Siswa</p>
                    </div>
                </div>
                <button
                    class="mt-6 w-full bg-customOrange text-white py-2 rounded-lg font-medium hover:bg-customBlue transition">
                    Lihat Berita Lainnya
                </button>
            </div>

            <!-- Quick Links -->
            <div class="bg-white p-5 rounded-xl shadow-md mt-6">
                <h3 class="font-bold text-xl mb-4 border-b-2 border-customBlue pb-2">Lainnya</h3>
                <ul class="space-y-3">
                    <li><a href="http://117.102.78.163/student/"
                            class="text-blue-600 hover:underline flex items-center"><i
                                class="fas fa-link mr-2 text-sm"></i>OCS (One Click Service)</a></li>
                    <li><a href="http://117.102.78.163/ocscbt/"
                            class="text-blue-600 hover:underline flex items-center"><i
                                class="fas fa-link mr-2 text-sm"></i>CBT (Computer Based Test)</a></li>
                    <li><a href="https://bki-skariga.web.id/kerjasama-industri/"
                            class="text-blue-600 hover:underline flex items-center"><i
                                class="fas fa-link mr-2 text-sm"></i>Bidang Kerja Sama Industri</a></li>
                    <li><a href="http://117.102.78.163/portalakademik/"
                            class="text-blue-600 hover:underline flex items-center"><i
                                class="fas fa-link mr-2 text-sm"></i>Portal Akademik</a></li>
                </ul>
            </div>
        </aside>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        document.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY >= 24) {
                header?.classList.add('bg-white', 'text-[#313131]', 'shadow-md');
            } else {
                header?.classList.remove('bg-white', 'text-[#313131]', 'shadow-md');
            }
        });
    });
    </script>

</x-layout>
