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
                </div>
            </section>

            <!-- Marquee -->
            <x-marquee></x-marquee>

            <!-- width && height = 100%, lg:w-2/5 -->
            <!-- Department Sections -->
<section class="py-8 md:py-12 animate-fade-in">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- Elektro -->
        <div
            class="bg-customOrange p-4 md:p-5 rounded-xl relative overflow-hidden flex flex-col justify-between transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:scale-[1.02]">
            <div class="bg-white p-2 mb-4 rounded-lg">
                <img class="w-full object-cover max-h-56 rounded-lg"
                    src="{{ asset('assets/elektro_card.png') }}" alt="Elektro Department">
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-3">Elektro</h2>
                <p class="text-white text-sm md:text-base line-clamp-3 mb-4">
                    Departemen Elektronika mempelajari dasar-dasar rangkaian listrik, komponen elektronik,
                    dan sistem digital.
                    Juga mencakup perakitan, pemrograman mikrokontroller, serta pengendalian otomatis.
                </p>
                <button
                    class="bg-white text-[#242424] text-sm md:text-base font-medium py-1.5 px-5 rounded-full hover:bg-gray-100 transition">
                    Selengkapnya
                </button>
            </div>
            <img class="absolute -bottom-2 -right-6 w-48 opacity-30 -rotate-12"
                src="{{ asset('assets/bg_elektro_card.png') }}" alt="">
        </div>

        <!-- Otomotif -->
        <div
            class="bg-customRed p-4 md:p-5 rounded-xl relative overflow-hidden flex flex-col justify-between transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:scale-[1.02]">
            <div class="bg-white p-2 mb-4 rounded-lg">
                <img class="w-full object-cover max-h-56 rounded-lg"
                    src="{{ asset('assets/otomotif_card.png') }}" alt="Otomotif Department">
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-3">Otomotif</h2>
                <p class="text-white text-sm md:text-base line-clamp-3 mb-4">
                    Departemen Otomotif mempelajari teori sistem kendaraan seperti mesin, transmisi,
                    kelistrikan, bodi, dan suspensi.
                    Praktiknya dilakukan di bengkel bersama guru pengajar.
                </p>
                <button
                    class="bg-white text-[#242424] text-sm md:text-base font-medium py-1.5 px-5 rounded-full hover:bg-gray-100 transition">
                    Selengkapnya
                </button>
            </div>
            <img class="absolute -bottom-2 -right-6 w-48 opacity-30 -rotate-12"
                src="{{ asset('assets/bg_otomotif_card.png') }}" alt="">
        </div>

        <!-- Pemesinan -->
        <div
            class="bg-customPink p-4 md:p-5 rounded-xl relative overflow-hidden flex flex-col justify-between transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:scale-[1.02]">
            <div class="bg-white p-2 mb-4 rounded-lg">
                <img class="w-full object-cover max-h-56 rounded-lg object-[center_20%]"
                    src="{{ asset('assets/pemesinan_card.jpg') }}" alt="Pemesinan Department">
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-3">Pemesinan</h2>
                <p class="text-white text-sm md:text-base line-clamp-3 mb-4">
                    Departemen Pemesinan mempelajari teknik pengoperasian mesin produksi seperti bubut,
                    frais, dan CNC.
                    Juga mencakup gambar teknik serta kontrol kualitas produk.
                </p>
                <button
                    class="bg-white text-[#242424] text-sm md:text-base font-medium py-1.5 px-5 rounded-full hover:bg-gray-100 transition">
                    Selengkapnya
                </button>
            </div>
            <img class="absolute -bottom-2 -right-6 w-48 opacity-30 -rotate-12"
                src="{{ asset('assets/bg_pemesinan_card.png') }}" alt="">
        </div>

        <!-- TIK -->
        <div
            class="bg-customBlue p-4 md:p-5 rounded-xl relative overflow-hidden flex flex-col justify-between transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:scale-[1.02]">
            <div class="bg-white p-2 mb-4 rounded-lg">
                <img class="w-full object-cover max-h-56 rounded-lg"
                    src="{{ asset('assets/tik_card.png') }}" alt="TIK Department">
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-3">TIK</h2>
                <p class="text-white text-sm md:text-base line-clamp-3 mb-4">
                    Departemen TIK mempelajari pemrograman, jaringan komputer, teknologi digital, dan
                    kecerdasan buatan.
                    Siswa juga belajar manajemen proyek TI dan etika teknologi.
                </p>
                <button
                    class="bg-white text-[#242424] text-sm md:text-base font-medium py-1.5 px-5 rounded-full hover:bg-gray-100 transition">
                    Selengkapnya
                </button>
            </div>
            <img class="absolute -bottom-2 -right-6 w-48 opacity-30 -rotate-12"
                src="{{ asset('assets/bg_tik_card.png') }}" alt="">
        </div>

    </div>
</section>

            <!-- End of Department Sections -->


            <!-- Student Habits Section -->
            <section class="bg-gray-200 py-12 rounded-xl mt-8 animate-fade-in delay-900 ease-in-out">
                <div class="container mx-auto px-4">
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-bold text-center mb-8 md:mb-12">3 KEBIASAAN MURID
                        SKARIGA</h2>

                    <div class="flex flex-col lg:flex-row items-center gap-6 justify-center">
                        <!-- Habit 1 -->
                        <div
                            class="w-full lg:w-1/3 habit-card text-white bg-customOrange hover:bg-customBlue p-5 flex flex-col transition-all duration-900 ease-in-out
                        hover:scale-105 hover:rounded-xl hover:shadow-2xl hover:z-10
                        min-h-[480px] hover:min-h-[520px] hover:self-start">
                            <img width="100%" height="100%"
                                class="w-full h-52 md:h-48 hover:h-64 object-cover rounded-lg mb-4"
                                src="{{ asset('assets/ceksabuk.jpg') }}" alt="Cek Kelengkapan Seragam">
                            <h3 class="text-xl md:text-2xl font-bold text-center mb-3">Cek Kelengkapan Seragam</h3>
                            <p class="text-base text-center cursor-default">
                                Sebelum memasuki sekolah, siswa wajib menunjukan kelengkapan seragam
                            </p>
                        </div>

                        <!-- Habit 2 -->
                        <div
                            class="w-full lg:w-1/3 habit-card text-white bg-customOrange hover:bg-customBlue p-5 flex flex-col transition-all duration-1000 ease-in-out
                        hover:scale-105 hover:rounded-xl hover:shadow-2xl hover:z-10
                        min-h-[480px] hover:min-h-[520px] hover:self-start">
                            <img width="100%" height="100%"
                                class="w-full h-52 md:h-48 hover:h-64 object-cover rounded-lg mb-4"
                                src="{{ asset('assets/jalurhijau.jpg') }}" alt="Jalur Hijau">
                            <h3 class="text-xl md:text-2xl font-bold text-center mb-3">Jalur Hijau</h3>
                            <p class="text-base text-center cursor-default">
                                SKARIGA selalu membiasakan warga sekolah untuk berjalan di jalur hijau, seperti yang
                                diterapkan di industri
                            </p>
                        </div>

                        <!-- Habit 3 -->
                        <div
                            class="w-full lg:w-1/3 habit-card text-white bg-customOrange hover:bg-customBlue p-5 flex flex-col transition-all duration-900 ease-in-out
                        hover:scale-105 hover:rounded-xl hover:shadow-2xl hover:z-10
                        min-h-[480px] hover:min-h-[520px] hover:self-start">
                            <img width="100%" height="100%"
                                class="w-full h-52 md:h-48 hover:h-64 object-cover rounded-lg mb-4"
                                src="{{ asset('assets/mengajipagi.jpg') }}" alt="Mengaji Pagi">
                            <h3 class="text-xl md:text-2xl font-bold text-center mb-3">Mengaji Pagi</h3>
                            <p class="text-base text-center cursor-default">
                                Bagi siswa muslim, SKARIGA mengadakan mengaji pagi bersama, seperti membaca juz amma,
                                dan doa pagi. Bagi non Muslim SKARIGA memberi tempat untuk beribadah pagi
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
                        <p class="text-sm font-semibold group-hover:text-customOrange transition">Pusdikarhanud
                            Galakkan
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

</x-layout>
