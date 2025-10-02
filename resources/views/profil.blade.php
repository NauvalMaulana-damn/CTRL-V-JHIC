<x-layout title="SMK PGRI 3 MALANG - Success by Discipline" :headerTransparent="true">
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

    <body class="bg-gray-50 text-gray-800">
        <!-- Hero SKARIGA -->
        <section class="relative w-full h-screen flex items-end z-10">
            <div class="absolute inset-0 w-full h-full hover-scale">
                <img src="{{ asset('assets/depansekul.jpg') }}" alt="Hero SKARIGA" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
            </div>
            <div class="relative z-10 p-8 md:p-16">
                <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-lg hover-scale">SKARIGA!</h1>
            </div>
        </section>

        <!-- Profil -->
        <section class="max-w-6xl mx-auto px-4 py-16">
            <div class="grid md:grid-cols-2 gap-10 items-start">
                <!-- Kolom Kiri: Gambar -->
                <div class="grid gap-4">
                    <!-- Gambar besar di atas -->
                    <img src="{{ asset('assets/gedung-seluruh.jpg') }}"
                        class="rounded-x4 shadow-md w-full h-64 object-cover hover-scale hover-brightness"
                        alt="Gedung Seluruhs">

                    <!-- 3 gambar kecil di bawah -->
                    <div class="grid grid-cols-2 gap-4">
                        <img src="{{ asset('assets/foto-depanadmin.JPG') }}"
                            class="rounded-xl shadow-md h-40 w-full object-cover hover-scale hover-brightness"
                            alt="Gedung 1">
                        <img src="{{ asset('assets/depan-alfa.webp') }}"
                            class="rounded-xl shadow-md h-40 w-full object-cover hover-scale hover-brightness"
                            alt="Gedung 2">
                    </div>
                </div>

                <!-- Kolom Kanan: Teks Profil -->
                <div>
                    <h2 class="text-5xl font-bold mb-4 hover-scale">Profil</h2>
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
                                class="flex items-center gap-2 bg-orange-500 text-white rounded-lg px-4 py-3 shadow hover-lift hover-glow">
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
                                class="flex items-center gap-2 bg-orange-500 text-white rounded-lg px-4 py-3 shadow hover-lift hover-glow">
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
        <section class="max-w-6xl mx-auto px-4 pt-6 pb-10">
            <div class="bg-orange-500 rounded-2xl shadow-lg overflow-hidden hover-lift">
                <div class="grid md:grid-cols-2 gap-6 items-center">
                    <div class="p-8 text-white">
                        <h2 class="text-5xl font-bold mb-4">Visi</h2>
                        <p>Menjadi SMK yang unggul dalam prestasi dengan dilandasi Iman & Taqwa serta menghasilkan
                            tamatan yang mampu bersaing ditingkat Nasional maupun Internasional</p>
                    </div>
                    <img src="{{ asset('assets/kcs-manjat.png') }}" alt="Visi"
                        class="w-full h-full object-cover hover-scale">
                </div>

            </div>
        </section>

        <!-- Misi -->
        <section class="max-w-6xl mx-auto px-4 pt-6 pb-10">
            <h2 class="text-4xl font-bold text-center mb-12 hover-scale">Misi</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

                <!-- Card 1 -->
                <div
                    class="bg-blue-500 text-white rounded-xl shadow-lg text-center p-8 flex flex-col items-center hover-lift hover-rotate">
                    <img src="{{ asset('assets/hand 1.png') }}" alt="Ikon 1" class="mb-6 w-20 h-20 hover-scale">
                    <p class="text-base leading-relaxed">
                        Menjadi SMK yang unggul dalam prestasi dengan dilandasi Iman & Taqwa serta menghasilkan tamatan
                        yang mampu bersaing di tingkat Nasional maupun Internasional.
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-green-500 text-white rounded-xl shadow-lg text-center p-8 flex flex-col items-center hover-lift hover-rotate">
                    <img src="{{ asset('assets/learning 1.png') }}" alt="Ikon 2" class="mb-6 w-20 h-20 hover-scale">
                    <p class="text-base leading-relaxed">
                        Melaksanakan proses belajar mengajar yang mengacu pada standar kompetensi lulusan Nasional
                        maupun Internasional, dan tetap meningkatkan kemampuan dasar peserta didik.
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-orange-500 text-white rounded-xl shadow-lg text-center p-8 flex flex-col items-center hover-lift hover-rotate">
                    <img src="{{ asset('assets/pray 1.png') }}" alt="Ikon 3" class="mb-6 w-20 h-20 hover-scale">
                    <p class="text-base leading-relaxed">
                        Menumbuhkan penghayatan dan pengalaman ajaran agama yang dianut dan budaya bangsa sehingga
                        terwujud insan yang berkepribadian luhur dan berkarakter.
                    </p>
                </div>

                <!-- Card 4 -->
                <div
                    class="bg-red-500 text-white rounded-xl shadow-lg text-center p-8 flex flex-col items-center hover-lift hover-rotate">
                    <img src="{{ asset('assets/heart 1.png') }}" alt="Ikon 4" class="mb-6 w-20 h-20 hover-scale">
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
                    <img src="{{ asset('assets/grad.png') }}" class="w-7 h-7 hover-scale">
                    <span class="font-semibold text-lg">Lulus Siap Kerja</span>
                </div>

                <!-- Box 2 -->
                <div
                    class="flex items-center justify-center gap-3 bg-orange-500 text-white rounded-lg px-6 py-4 shadow-md hover-lift hover-glow">
                    <img src="{{ asset('assets/hand shake.png') }}" class="w-7 h-7 hover-scale">
                    <span class="font-semibold text-lg">Kerja Sama Industri</span>
                </div>

                <!-- Box 3 -->
                <div
                    class="flex items-center justify-center gap-3 bg-orange-500 text-white rounded-lg px-6 py-4 shadow-md hover-lift hover-glow">
                    <img src="{{ asset('assets/trophy.png') }}" class="w-7 h-7 hover-scale">
                    <span class="font-semibold text-lg">Prestasi Tingkat Nasional</span>
                </div>
            </div>
        </section>

        <!-- Profil Lengkap -->
        <section class="mx-auto px-4 py-16">
            <h2 class="text-4xl font-bold text-center mb-8 hover-scale">Profil Lengkap SKARIGA</h2>
            <div
                class="relative w-full max-w-[1100px] h-full max-h-[600px] aspect-square mx-auto rounded-2xl overflow-hidden shadow-lg hover-lift">
                <iframe
                    src="https://www.youtube.com/embed/FAwdUR9SFRU?si=JYpD_LbCAMgLP_zM&vq=hd1080&modestbranding=1&rel=0&playsinline=1"
                    title="PROFIL SMK PGRI 3 MALANG" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                    class="absolute inset-0 w-full h-[600px] object-cover rounded-2xl">
                </iframe>
            </div>
        </section>

        <!-- Sponsor -->
        <div class="py-4 overflow-hidden rounded-lg mb-8 animate-fade-in delay-100">
            <div class="scroll-container flex whitespace-nowrap animate-scroll">
                <div class="flex space-x-8 md:space-x-12 pr-12">
                    <!-- Logo asli -->
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/alfa logo 1.png') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/b&d icon 1.png') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/lg icon 1.png') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/pjb icon 1.png') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/daihat logo 1.png') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/Honda_Logo.svg') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block hover-scale"
                        src="{{ asset('assets/kompas logo.svg') }}" alt="Kompas Logo">
                    <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block hover-scale"
                        src="{{ asset('assets/Polytron logo.png') }}" alt="Polytron Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/auto 2000.webp') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/Ahass logo.png') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block hover-scale"
                        src="{{ asset('assets/yamaha logo.png') }}" alt="Yamaha Logo">

                    <!-- Logo duplikat untuk looping mulus -->
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/alfa logo 1.png') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/b&d icon 1.png') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/lg icon 1.png') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/pjb icon 1.png') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/daihat logo 1.png') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/Honda_Logo.svg') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block hover-scale"
                        src="{{ asset('assets/kompas logo.svg') }}" alt="Kompas Logo">
                    <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block hover-scale"
                        src="{{ asset('assets/Polytron logo.png') }}" alt="Polytron Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/auto 2000.webp') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 object-contain inline-block hover-scale"
                        src="{{ asset('assets/Ahass logo.png') }}" alt="Partner Logo">
                    <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block hover-scale"
                        src="{{ asset('assets/yamaha logo.png') }}" alt="Yamaha Logo">
                </div>
            </div>
        </div>

        <!-- Berita Terbaru -->
        <section class=" ">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-12 bg-orange-400 py-5 rounded-2xl text-white hover-scale">
                    Berita Terbaru</h2>

                <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- Card -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition flex flex-col hover-lift hover-border-orange">
                        <img src="{{ asset('assets/news/kcs38.jpg') }}" alt="KCS 38"
                            class="h-40 w-full object-cover hover-scale">
                        <div class="p-5 flex flex-col flex-grow">
                            <h3 class="font-semibold text-lg mb-2">KCS 38 DI PUSBIDK ARHANUD</h3>
                            <p class="text-sm text-gray-600 flex-grow">
                                Sebanyak 93 siswa baru SMK PGRI 3 Malang mengikuti Kegiatan Cinta Sekolah (KCS) ke-38
                                yang digelar di Pusdik Arhanud.
                            </p>
                            <a href="#"
                                class="text-orange-500 font-medium text-sm mt-4 inline-block hover-text-white hover-bg-orange px-3 py-1 rounded transition-all">Selengkapnya</a>
                        </div>
                    </div>

                    <!-- Card -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition flex flex-col hover-lift hover-border-orange">
                        <img src="{{ asset('assets/news/lks2025.jpg') }}" alt="Juara 1 LKS"
                            class="h-40 w-full object-cover hover-scale">
                        <div class="p-5 flex flex-col flex-grow">
                            <h3 class="font-semibold text-lg mb-2">JUARA 1 LKS NASIONAL 2025</h3>
                            <p class="text-sm text-gray-600 flex-grow">
                                SMK PGRI 3 Malang kembali meraih prestasi nasional dengan meraih medali emas dalam ajang
                                Lomba Kompetensi Siswa (LKS) Nasional 2025 bidang Manufacturing System.
                            </p>
                            <a href="#"
                                class="text-orange-500 font-medium text-sm mt-4 inline-block hover-text-white hover-bg-orange px-3 py-1 rounded transition-all">Selengkapnya</a>
                        </div>
                    </div>

                    <!-- Card -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition flex flex-col hover-lift hover-border-orange">
                        <img src="{{ asset('assets/news/gamal.jpg') }}" alt="dr. Gamal ke SKARIGA"
                            class="h-40 w-full object-cover hover-scale">
                        <div class="p-5 flex flex-col flex-grow">
                            <h3 class="font-semibold text-lg mb-2">dr. Gamal ke SKARIGA</h3>
                            <p class="text-sm text-gray-600 flex-grow">
                                Sebanyak 80 siswa SMK PGRI 3 Malang menerima bantuan Program Indonesia Pintar dari
                                Kementerian Pendidikan melalui dr. Gamal Albinsaid.
                            </p>
                            <a href="#"
                                class="text-orange-500 font-medium text-sm mt-4 inline-block hover-text-white hover-bg-orange px-3 py-1 rounded transition-all">Selengkapnya</a>
                        </div>
                    </div>

                    <!-- Card -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition flex flex-col hover-lift hover-border-orange">
                        <img src="{{ asset('assets/news/futsal.jpg') }}" alt="School Visit"
                            class="h-40 w-full object-cover hover-scale">
                        <div class="p-5 flex flex-col flex-grow">
                            <h3 class="font-semibold text-lg mb-2">School Visit oleh Futsal Series</h3>
                            <p class="text-sm text-gray-600 flex-grow">
                                SMK PGRI 3 Malang menjadi tuan rumah kegiatan "School Visit Futsal Series 2025" yang
                                mempererat persaudaraan antar sekolah.
                            </p>
                            <a href="#"
                                class="text-orange-500 font-medium text-sm mt-4 inline-block hover-text-white hover-bg-orange px-3 py-1 rounded transition-all">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</x-layout>
