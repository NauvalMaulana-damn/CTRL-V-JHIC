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
                    <div class="swiper-wrapper" id="x-headnews">
                        <!-- Hanya gambar -->
                        <x-headnews image1="default.svg" image2="default.svg" image3="default.svg" />
                    </div>

                    <!-- Overlay + teks tetap di sini -->
                    <div
                        class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-black/70 to-transparent pointer-events-none">
                    </div>
                    <div id="x-headnews-content"
                        class="absolute bottom-6 left-5 md:left-8 text-white max-w-4xl z-10 pointer-events-none">
                        <h1 class="title text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2">
                            TITLE
                        </h1>
                        <p class="desc text-base sm:text-lg md:text-xl lg:text-2xl font-bold mb-6">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet vero dolores aliquam
                            ab fugiat. Et, nihil voluptatum minus, at minima unde quibusdam temporibus animi dolore
                            inventore soluta quisquam incidunt obcaecati!
                        </p>
                    </div>

                    <!-- Pagination & Navigation -->
                    <div class="swiper-button-prev" style="color: white;"></div>
                    <div class="swiper-button-next" style="color: white;"></div>
                    <div class="swiper-pagination"></div>
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
                            <a href="/jurusan">
                                <button
                                    class="bg-white text-[#242424] text-sm md:text-base font-medium py-1.5 px-5 rounded-full hover:bg-gray-100 transition">
                                    Selengkapnya
                                </button>
                            </a>
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
                            <a href="/jurusan">
                                <button
                                    class="bg-white text-[#242424] text-sm md:text-base font-medium py-1.5 px-5 rounded-full hover:bg-gray-100 transition">
                                    Selengkapnya
                                </button>
                            </a>
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
                            <a href="/jurusan">
                                <button
                                    class="bg-white text-[#242424] text-sm md:text-base font-medium py-1.5 px-5 rounded-full hover:bg-gray-100 transition">
                                    Selengkapnya
                                </button>
                            </a>
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
                            <a href="/jurusan">
                                <button
                                    class="bg-white text-[#242424] text-sm md:text-base font-medium py-1.5 px-5 rounded-full hover:bg-gray-100 transition">
                                    Selengkapnya
                                </button>
                            </a>
                        </div>
                        <img class="absolute -bottom-2 -right-6 w-48 opacity-30 -rotate-12"
                            src="{{ asset('assets/bg_tik_card.png') }}" alt="">
                    </div>

                </div>
            </section>

            <!-- End of Department Sections -->


            <!-- Student Habits Section -->
            ew
        </main>

        <!-- News Sidebar (Not fixed) -->
        <aside class="w-full lg:w-1/4 lg:pl-8 mt-8 lg:mt-0 animate-fade-in delay-400">
            <div class="bg-white p-5 rounded-xl shadow-md">
                <h3 class="font-bold text-xl mb-4 border-b-2 border-customOrange pb-2">Berita Terbaru</h3>
                <div id="x-sidenews" class="space-y-6">
                    <x-sidenews title="Pendaftaran SKARIGA" image="news-pendaftaran1.webp" onclick="showNews(
                    'Kuota Pendaftaran SMK PGRI 3 Dibatasi Menjadi 500 Pendaftar',
                    'Pada Jumat (10/10/2025), SKARIGA dibanjiri para pendaftar. Pendaftaran Berlangsung hingga malam.',
                    'news-pendaftaran1.webp', 'news-pendaftaran2.webp', 'news-pendaftaran3.jpg')">
                        Kuota Pendaftaran SMK PGRI 3 Dibatasi Menjadi 500 Pendaftar</x-sidenews>
                    <x-sidenews title="Juara LKS" image="head_news_1.png" onclick="showNews(
                    'PARA SISWA MENJUARAI LKS DIKMEN JATIM XXXII',
                    'BERBAGAI BIDANG MEREKA TAKLUKAN DENGAN POSISI JUARA 1',
                    'head_news_1.png', 'lksdikmen33rms.jpg', 'lksdikmen33ic.jpg')">
                        Para Siswa Menjuarai LKS DIKMEN JATIM XXXII</x-sidenews>
                    <x-sidenews title="Menyambut Hari Kemerdekaan" image="agustusan.jpg" onclick="showNews(
                    'SAMBUT HARI KEMERDEKAAN, SKARIGA GELAR JALAN SEHAT DAN ANEKA LOMBA PENUH SEMANGAT',
                    'KEGIATAN BERLANGSUNG DENGAN PENUH SEMANGAT',
                    'agustusan.jpg', 'agustusan2.jpg', 'agustusan3.jpg')">
                        Sambut Hari Kemerdekaan, SKARIGA Gelar Jalan Sehat dan Aneka Lomba Penuh Semangat</x-sidenews>
                    <x-sidenews title="KCS 38" image="kcs38-1.jpg" onclick="showNews(
                    'PUSDIKARHANUD GALAKKAN GERAKAN KEGIATAN CINTA SEKOLAH UNTUK BENTUK KARAKTER MURID',
                    'MURID MENGIKUTI DIKLAT DENGAN INTENSIF DAN MENGINAP SATU MALAM DI PUSDIKARHANUD',
                    'kcs38-1.jpg', 'kcs38-2.jpg', 'kcs38-3.jpg')">
                        Pusdikarhanud Galakkan Gerakan Kegiatan Cinta Sekolah untuk Bentuk Karakter Siswa</x-sidenews>
                    <a href="/berita">
                        <button
                            class="mt-6 w-full bg-customOrange text-white py-2 rounded-lg font-medium hover:bg-customBlue transition">
                            Lihat Berita Lainnya
                        </button>
                    </a>
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
        document.querySelector("#x-sidenews .sidenews-item").click();
    });
    </script>
</x-layout>
