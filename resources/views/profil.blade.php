<x-layout title="Profil - SMK PGRI 3 Malang" :headerTransparent="false">
    <style>
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-scroll {
        display: flex;
        animation: scroll 25s linear infinite;
    }

    /* Animasi tambahan untuk hover */
    .hover-lift {
        transition: all 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .hover-scale {
        transition: all 0.4s ease;
    }

    .hover-scale:hover {
        transform: scale(1.05);
    }

    .hover-glow:hover {
        box-shadow: 0 0 20px rgba(249, 115, 22, 0.5);
    }

    .hover-rotate:hover {
        transform: rotate(2deg);
    }

    .hover-brightness:hover {
        filter: brightness(1.1);
    }

    .hover-border-orange:hover {
        border: 2px solid #f97316;
    }

    .hover-text-white:hover {
        color: white;
    }

    .hover-bg-orange:hover {
        background-color: #f97316;
    }

    .hover-shadow-lg {
        transition: all 0.3s ease;
    }

    .hover-shadow-lg:hover {
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    </style>
    {{-- Hero Skariga Before---
        <section class="relative w-full h-screen flex items-end z-10 mx-4 md:mx-6 mt-6">
    <div class="absolute inset-0 w-full h-full hover-scale">
        <div class="absolute inset-0 bg-gradient-to-t from-transparent via-black/5 to-black/70"></div>
        <img src="{{ asset('assets/depansekul.jpg') }}" alt="Hero SKARIGA" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
    </div>
    <div class="relative z-10 p-8 md:p-16">
        <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-lg hover-scale">SKARIGA!</h1>
    </div>
    </section> --}}

    <div class="h-full h-max-content container mx-auto px-4 py-6">
        <!-- Hero SKARIGA -->
        <section class="relative h-[535px] mt-2 rounded-xl overflow-hidden">
            <div class="absolute inset-0 w-full h-full hover-scale">
                <div class="absolute inset-0 bg-gradient-to-t from-transparent via-black/5 to-black/70"></div>
                <img src="{{ asset('assets/depansekul.jpg') }}" alt="Hero SKARIGA" class="w-full h-full object-cover ">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
            </div>
            <div class="absolute bottom-8 left-3.5 md:left-10 z-10">
                <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-lg hover-scale cursor-default">
                    SKARIGA!
                </h1>
            </div>
        </section>


        <!-- Profil -->
        <section class="w-full container py-16 overflow-hidden z-10">
            <div class="grid md:grid-cols-2 gap-10 items-start">
                <!-- Kolom Kiri: Gambar -->
                <div class="grid gap-4">
                    <!-- Gambar besar di atas -->
                    <img src="{{ asset('assets/gedung-seluruh.jpg') }}"
                        class="rounded-xl shadow-md w-full h-64 object-cover hover-lift hover-brightness"
                        alt="Keseluruhan Gedung">

                    <!-- 3 gambar kecil di bawah -->
                    <div class="grid grid-cols-2 gap-4">
                        <img src="{{ asset('assets/foto-depanadmin.JPG') }}"
                            class="rounded-xl shadow-md h-40 w-full object-cover hover-lift hover-brightness"
                            alt="Gedung 1">
                        <img src="{{ asset('assets/depan-alfa.webp') }}"
                            class="rounded-xl shadow-md h-40 w-full object-cover hover-lift hover-brightness"
                            alt="Gedung 2">
                    </div>
                </div>

                <!-- Kolom Kanan: Teks Profil -->
                <div>
                    <h2 class="text-5xl font-bold mb-4">Profil</h2>
                    <p class="text-gray-600 leading-relaxed mb-6 text-justify">
                        SMK PGRI 3 Malang dirintis sejak tahun 1986 atas prakarsa sebanyak 16 dosen dari Universitas
                        Brawijaya, Kota Malang.
                        Pada bulan September 1986, SMK PGRI Malang didirikan dengan nama STM PGRI Dau Malang.
                        Pengelolaan dilakukan oleh Yayasan PGRI Kecamatan DAU Kabupaten Malang.
                        Lokasi pembelajaran awalnya dilakukan di SD Negeri Tlogomas 2 Malang yang berlokasi di wilayah
                        Kecamatan Dau, Kabupaten Malang.
                    </p>

                    <!-- Kotak Info -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Box 1 -->
                        <div>
                            <div
                                class="flex items-center gap-2 cursor-default bg-orange-500 text-white rounded-lg px-4 py-3 shadow hover-lift hover-glow">
                                <i class="fas fa-award"></i>
                                <span class="font-semibold">Sekolah Terakreditasi A</span>
                            </div>
                            <p class="text-gray-700 text-sm mt-2">
                                Ditetapkan oleh BAN-PDM dengan sk 1857/BAN-SM/SK/2022.
                            </p>
                        </div>

                        <!-- Box 2 -->
                        <div>
                            <div
                                class="flex items-center gap-2 cursor-default bg-orange-500 text-white rounded-lg px-4 py-3 shadow hover-lift hover-glow">
                                <i class="fas fa-calendar-check"></i>
                                <span class="font-semibold">Success By Discipline</span>
                            </div>
                            <p class="text-gray-700 text-sm mt-2">
                                Dengan motto tersebut SMK PGRI 3 MALANG mampu menghasilkan lulusan yang sukses.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi -->
        <section class="w-full mx-auto pt-6 pb-10 mt-12">
    <div class="bg-orange-500 rounded-2xl shadow-lg overflow-visible relative hover-lift hover-glow">
        <div class="grid md:grid-cols-2 items-start relative py-12">
            <!-- Gambar Kepala Sekolah -->
            <div class="relative flex justify-center items-start">
                <img src="{{ asset('assets/bp.Luqman_kepsek-removebg-preview.png') }}"
                    alt="Kepala Sekolah SMK PGRI 3 Malang"
                    class="absolute top-0 left-[40%] transform -translate-x-1/2 -translate-y-[41.2%] w-full md:w-[100%] max-h-[450px] object-contain">

                <!-- Nama di sebelah kanan leher -->
                <div class="absolute top-[52%] left-[62%] text-white">
                    <h3 class="text-lg font-bold leading-tight drop-shadow-md">Moch. Lukman Hakim, S.T., M.M.</h3>
                    <p class="text-base font-medium opacity-90 drop-shadow-md">Kepala SMK PGRI 3 Malang</p>
                </div>
            </div>

            <!-- Bagian Visi -->
            <div class="px-8 py-8 text-white z-10">
                <h2 class="text-5xl font-bold mb-4">Visi</h2>
                <p class="text-lg leading-relaxed">
                    Menjadi SMK yang unggul dalam prestasi dengan dilandasi Iman &amp; Taqwa serta menghasilkan
                    tamatan yang mampu bersaing di tingkat Nasional maupun Internasional.
                </p>
            </div>
        </div>
    </div>
</section>


        <!-- Misi -->
        <section class="w-full mx-auto pt-6 pb-10">
            <h2 class="text-5xl font-bold text-center mb-12">Misi</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

                <!-- Card 1 -->
                <div
                    class="bg-blue-500 text-white rounded-xl shadow-lg text-center p-8 flex flex-col items-center hover-lift hover-rotate">
                    <img src="{{ asset('assets/hand 1.png') }}" alt="Ikon 1" class="mb-6 w-20 h-20 hover-scale invert"
                        loading="lazy">
                    <h3 class="text-2xl font-bold text-center mt-2">Unggul & Beriman</h3>
                    <hr class="w-full h-px bg-gray-300 border-0 my-4">
                    <p class="text-base leading-relaxed">
                        Menjadi SMK yang unggul dalam prestasi dengan dilandasi Iman & Taqwa serta menghasilkan tamatan
                        yang mampu bersaing di tingkat Nasional maupun Internasional.
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-green-500 text-white rounded-xl shadow-lg text-center p-8 flex flex-col items-center hover-lift hover-rotate">
                    <img src="{{ asset('assets/learning 1.png') }}" alt="Ikon 2"
                        class="mb-6 w-20 h-20 hover-scale invert" loading="lazy">
                    <h3 class="text-2xl font-bold text-center mt-2">Kurikulum Unggul</h3>
                    <hr class="w-full h-px bg-gray-300 border-0 my-4">
                    <p class="text-base leading-relaxed">
                        Melaksanakan proses belajar mengajar yang mengacu pada standar kompetensi lulusan Nasional
                        maupun Internasional, dan tetap meningkatkan kemampuan dasar peserta didik.
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-orange-500 text-white rounded-xl shadow-lg text-center p-8 flex flex-col items-center hover-lift hover-rotate">
                    <img src="{{ asset('assets/pray 1.png') }}" alt="Ikon 3" class="mb-6 w-20 h-20 hover-scale invert"
                        loading="lazy">
                    <h3 class="text-2xl font-bold text-center mt-2">Berbudi Pekerti</h3>
                    <hr class="w-full h-px bg-gray-300 border-0 my-4">
                    <p class="text-base leading-relaxed">
                        Menumbuhkan penghayatan dan pengalaman ajaran agama yang dianut dan budaya bangsa sehingga
                        terwujud insan yang berkepribadian luhur dan berkarakter.
                    </p>
                </div>

                <!-- Card 4 -->
                <div
                    class="bg-red-500 text-white rounded-xl shadow-lg text-center p-8 flex flex-col items-center hover-lift hover-rotate">
                    <img src="{{ asset('assets/heart 1.png') }}" alt="Ikon 4" class="mb-6 w-20 h-20 hover-scale invert"
                        loading="lazy">
                    <h3 class="text-2xl font-bold text-center mt-2">Sistem Terpadu</h3>
                    <hr class="w-full h-px bg-gray-300 border-0 my-4">
                    <p class="text-base leading-relaxed">
                        Menerapkan pengelolaan sekolah yang memadai secara standar nasional dengan menerapkan sistem
                        manajemen sekolah yang efektif, efisien, serta selaras dengan perkembangan teknologi.
                    </p>
                </div>

            </div>

            <!-- Box kecil bawah -->
            <div class="grid sm:grid-cols-3 gap-6 mt-12">
                <!-- Box 1 -->
                <div
                    class="flex items-center justify-center gap-3 bg-orange-500 text-white rounded-lg px-6 py-4 shadow-md hover-lift hover-glow">
                    <img src="{{ asset('assets/grad.png') }}" class="w-7 h-7 hover-scale invert" alt="graduation"
                        loading="lazy">
                    <span class="font-semibold text-lg cursor-default">Lulus Siap Kerja</span>
                </div>

                <!-- Box 2 -->
                <div
                    class="flex items-center justify-center gap-3 bg-orange-500 text-white rounded-lg px-6 py-4 shadow-md hover-lift hover-glow">
                    <img src="{{ asset('assets/hand shake.png') }}" class="w-7 h-7 hover-scale invert" alt="handshake"
                        loading="lazy">
                    <span class="font-semibold text-lg cursor-default">Kerja Sama Industri</span>
                </div>

                <!-- Box 3 -->
                <div
                    class="flex items-center justify-center gap-3 bg-orange-500 text-white rounded-lg px-6 py-4 shadow-md hover-lift hover-glow">
                    <img src="{{ asset('assets/trophy.png') }}" class="w-7 h-7 hover-scale invert" alt="trophy"
                        loading="lazy">
                    <span class="font-semibold text-lg cursor-default">Prestasi Tingkat Nasional</span>
                </div>
            </div>
        </section>

        <!-- Profil Lengkap -->
        <section class="mx-auto py-16">
            <h2 class="text-5xl font-bold text-center mb-8">Profil Lengkap SKARIGA</h2>
            <div
                class="relative w-full h-full max-h-52 sm:max-h-80 md:max-h-96 lg:max-h-[800px] aspect-square mx-auto rounded-2xl overflow-hidden shadow-lg hover-lift">
                <iframe
                    src="https://www.youtube.com/embed/FAwdUR9SFRU?si=JYpD_LbCAMgLP_zM&vq=hd1080&modestbranding=1&rel=0&playsinline=1"
                    title="PROFIL SMK PGRI 3 MALANG" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                    class="absolute inset-0 w-full h-full object-cover rounded-2xl">
                </iframe>
            </div>
        </section>

        <!-- Sponsor -->
        <x-marquee></x-marquee>

        <!-- Berita Terbaru -->
        <!-- <section class=" ">
            <div class="w-full mx-auto">
                <h2 class="text-4xl font-bold text-center mb-12 bg-orange-400 py-5 rounded-2xl text-white">
                    Berita Terbaru</h2>

                <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8"> -->
                    <!-- Card -->
                    <!-- <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition flex flex-col hover-lift hover-border-orange min-h-[560px]">
                        <img src="{{ asset('assets/kcs38-1.jpg') }}" alt="KCS 38" class="h-48 w-full object-cover"
                            loading="lazy">
                        <div class="p-8 flex flex-col flex-grow">
                            <h3 class="font-semibold text-lg mb-2">KCS 38 DI PUSDIK ARHANUD</h3>
                            <p class="text-sm text-gray-600 flex-grow text-justify">
                                Sebanyak 93 siswa baru SMK PGRI 3 Malang mengikuti Kegiatan Cinta Sekolah (KCS) ke-38
                                yang digelar di Pusdik Arhanud.
                            </p>
                            <a href="#"
                                class="text-orange-500 font-medium text-sm mt-4 inline-block hover-text-white hover-bg-orange px-3 py-1 rounded transition-all">Selengkapnya</a>
                        </div>
                    </div> -->

                    <!-- Card -->
                    <!-- <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition flex flex-col hover-lift hover-border-orange min-h-[560px]">
                        <img src="{{ asset('assets/robot-manu.jpg') }}" alt="Juara 1 LKS"
                            class="h-48 w-full object-cover" loading="lazy">
                        <div class="p-8 flex flex-col flex-grow">
                            <h3 class="font-semibold text-lg mb-2">JUARA 1 LKS NASIONAL 2025</h3>
                            <p class="text-sm text-gray-600 flex-grow text-justify">
                                SMK PGRI 3 Malang kembali meraih prestasi nasional dengan meraih medali emas dalam ajang
                                Lomba Kompetensi Siswa (LKS) Nasional 2025 bidang Manufacturing System.
                            </p>
                            <a href="#"
                                class="text-orange-500 font-medium text-sm mt-4 inline-block hover-text-white hover-bg-orange px-3 py-1 rounded transition-all">Selengkapnya</a>
                        </div>
                    </div> -->

                    <!-- Card -->
                    <!-- <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition flex flex-col hover-lift hover-border-orange min-h-[560px]">
                        <img src="{{ asset('assets/drgamal.png') }}" alt="dr. Gamal ke SKARIGA"
                            class="h-48 w-full object-cover" loading="lazy">
                        <div class="p-8 flex flex-col flex-grow">
                            <h3 class="font-semibold text-lg mb-2">dr. Gamal ke SKARIGA</h3>
                            <p class="text-sm text-gray-600 flex-grow text-justify">
                                Sebanyak 80 siswa SMK PGRI 3 Malang menerima bantuan Program Indonesia Pintar dari
                                Kementerian Pendidikan melalui dr. Gamal Albinsaid.
                            </p>
                            <a href="#"
                                class="text-orange-500 font-medium text-sm mt-4 inline-block hover-text-white hover-bg-orange px-3 py-1 rounded transition-all">Selengkapnya</a>
                        </div>
                    </div> -->

                    <!-- Card -->
                    <!-- <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition flex flex-col hover-lift hover-border-orange min-h-[560px]">
                        <img src="{{ asset('assets/supporteran.jpg') }}" alt="School Visit"
                            class="h-48 w-full object-cover" loading="lazy">
                        <div class="p-8 flex flex-col flex-grow">
                            <h3 class="font-semibold text-lg mb-2">School Visit oleh Futsal Series</h3>
                            <p class="text-sm text-gray-600 flex-grow text-justify">
                                SMK PGRI 3 Malang menjadi tuan rumah kegiatan "School Visit Futsal Series 2025" yang
                                mempererat persaudaraan antar sekolah.
                            </p>
                            <a href="#"
                                class="text-orange-500 font-medium text-sm mt-4 inline-block hover-text-white hover-bg-orange px-3 py-1 rounded transition-all">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </div>
</x-layout>
