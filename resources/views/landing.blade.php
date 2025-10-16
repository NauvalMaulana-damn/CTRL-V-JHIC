<x-layout title="SMK PGRI 3 Malang - Success by Discipline">
    <script>
    // Pass data dari PHP ke JavaScript sebagai array object, bukan JSON string
    window.beritas = @json($beritas);
    console.log('📊 Beritas data loaded:', window.beritas);

    // Jangan panggil initializeNewsSlider di sini, biarkan app.ts yang handle
    </script>

    <!-- Main content with news sidebar -->
    <div class="flex flex-col h-full h-max-content lg:flex-row container mx-auto px-4 py-6">
        <!-- Main content -->
        <main class="w-full lg:w-3/4 animate-fade-in">
            <!-- Hero Section -->
            <section class="relative w-full overflow-hidden rounded-xl mb-8">
                <div class="swiper mySwiper rounded-xl overflow-hidden">
                    <div class="swiper-wrapper" id="x-headnews">

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
                            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-3">Elektro</h2>
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
                            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-3">Otomotif</h2>
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
                            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-3">Pemesinan</h2>
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
                            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-3">TIK</h2>
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

            <!-- Student Habits Section -->
            <section class="bg-gray-200 py-12 rounded-xl mt-8 animate-fade-in delay-900 ease-in-out">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-4xl lg:text-5xl font-bold text-center mb-8 md:mb-12">
            KEBIASAAN MURID SKARIGA
        </h2>

        <!-- Card Wrapper -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-items-center">
            <x-habitcard title="Cek Kelengkapan Seragam" image="ceksabuk.jpg">
                Sebelum memasuki sekolah, siswa wajib menunjukan kelengkapan seragam
            </x-habitcard>

            <x-habitcard title="Jalur Hijau" image="jalurhijau.jpg">
                SKARIGA selalu membiasakan warga sekolah untuk berjalan di jalur hijau, seperti yang
                diterapkan di industri
            </x-habitcard>

            <x-habitcard title="Mengaji Pagi" image="mengajipagi.jpg">
                Bagi siswa muslim, SKARIGA mengadakan mengaji pagi bersama, seperti membaca juz amma,
                dan doa pagi. Bagi non Muslim SKARIGA memberi tempat untuk beribadah pagi
            </x-habitcard>

            <x-habitcard title="Makan Bersama" image="kebiasaan-4(2).jpg">
                Pada istirahat pertama, budaya yang melekat pada murid-murid SKARIGA
                adalah budaya makan bersama secara lesehan
            </x-habitcard>
        </div>
    </div>
</section>


        </main>

        <!-- News Sidebar (Not fixed) -->
        <aside class="w-full lg:w-1/4 lg:pl-8 mt-8 lg:mt-0 animate-fade-in delay-400">
            <div class="bg-white p-5 rounded-xl shadow-md">
                <h3 class="font-bold text-xl mb-4 border-b-2 border-customOrange pb-2">Berita Terbaru</h3>
                <div id="x-sidenews" class="space-y-6">
                    @foreach ($beritas as $index => $berita)
                    <div class="sidenews-item cursor-pointer transition-all duration-300 p-2 rounded-lg hover:bg-gray-50"
                        onclick="window.showNews({{ $index }})">
                        <!-- HANYA INDEX -->
                        <x-sidenews title="{{ $berita->title }}" image="{{ $berita->gambar }}" />
                    </div>
                    @endforeach
                    <a href="/berita">
                        <button
                            class="mt-6 w-full bg-customOrange text-white py-2 rounded-lg font-medium hover:bg-customBlue transition">
                            Lihat Berita Lainnya
                        </button>
                    </a>
                </div>
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
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi swiper dengan data berita
        initializeNewsSlider();
    });
    </script>
</x-layout>
