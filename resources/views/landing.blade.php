<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK PGRI 3 MALANG</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    customRed: '#FD5353',
                    customOrange: '#FF8F4D',
                    customBlue: '#4694FF',
                    customPink: '#FD467E',
                },
                fontFamily: {
                    poppins: ['Poppins', 'sans-serif'],
                    inter: ['Inter', 'sans-serif'],
                },
            }
        }
    }
    </script>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .gradient-overlay {
        background: linear-gradient(180deg, rgba(217, 217, 217, 0) 0%, black 100%);
    }

    .department-card {
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.25);
        border-radius: 48px;
    }

    .info-card {
        border-radius: 34px;
    }

    .habit-card {
        border-radius: 25px;
    }

    .scroll-container {
        animation: scroll 30s linear infinite;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }
    </style>
</head>

<body class="bg-[#F8F8F8]">
    <!-- Header/Navigation -->
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <div class="container mx-auto px-4 py-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center mb-4 md:mb-0">
                    <img class="w-20 h-14 md:w-28 md:h-20 object-contain" src="https://placehold.co/115x82"
                        alt="Logo SMK PGRI 3 Malang">
                    <div class="ml-4">
                        <div class="text-[#313131] text-lg md:text-xl font-medium">SMK PGRI 3 MALANG</div>
                        <div class="text-[#313131] text-sm md:text-xl font-medium">Succes By Discipline</div>
                    </div>
                </div>
                <nav class="w-full md:w-auto">
                    <ul
                        class="flex flex-wrap justify-center gap-4 md:gap-8 text-[#313131] text-base md:text-xl font-medium">
                        <li><a href="#" class="hover:text-blue-600 transition">Beranda</a></li>
                        <li><a href="#" class="hover:text-blue-600 transition">Prestasi</a></li>
                        <li><a href="#" class="hover:text-blue-600 transition">Program</a></li>
                        <li><a href="#" class="hover:text-blue-600 transition">Alumni</a></li>
                        <li><a href="#" class="hover:text-blue-600 transition">Pendaftaran</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative w-full h-[50vh] md:h-[70vh] lg:h-[80vh] overflow-hidden">
        <img class="w-full h-full object-cover" src="https://placehold.co/1942x956" alt="SMK PGRI 3 Malang">
        <div class="absolute bottom-0 left-0 w-full h-1/2 gradient-overlay"></div>
        <div class="absolute bottom-10 left-5 md:left-10 text-white max-w-4xl">
            <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2">PARA SISWA MENJUARAI LKS DIKMEN JATIM
                XXXII</h1>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold">MEREKA MENJUARAI BERBAGAI BIDANG LOMBA
                DALAM LKS DIKMEN JATIM XXXII</p>
        </div>
    </section>

    <!-- News Ticker -->
    <div class="bg-white py-4 overflow-hidden">
        <div class="scroll-container flex whitespace-nowrap">
            <div class="flex space-x-12 pr-12">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/125x60"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/155x87"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/182x95"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/115x71"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/174x101"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/177x58"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/125x60"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/155x87"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/182x95"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/115x71"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/174x101"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/177x58"
                    alt="Partner Logo">
            </div>
            <!-- Duplicate for seamless loop -->
            <div class="flex space-x-12 pr-12">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/125x60"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/155x87"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/182x95"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/115x71"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/174x101"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/177x58"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/125x60"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/155x87"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/182x95"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/115x71"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/174x101"
                    alt="Partner Logo">
                <img class="h-8 md:h-12 object-contain inline-block" src="https://placehold.co/177x58"
                    alt="Partner Logo">
            </div>
        </div>
    </div>

    <!-- Department Sections -->
    <main class="container mx-auto px-4 py-10 md:py-16">
        <!-- Elektro Department -->
        <div class="flex flex-col lg:flex-row gap-8 mb-16">
            <div class="w-full lg:w-1/2 department-card bg-customRed p-6 relative overflow-hidden">
                <div class="info-card bg-white p-2 mb-6">
                    <img class="w-full h-auto rounded-2xl" src="https://placehold.co/868x407" alt="Elektro Department">
                </div>
                <h2 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6">Elektro</h2>
                <p class="text-white text-lg md:text-xl mb-8">
                    Departemen Elektronika mempelajari dasar-dasar rangkaian listrik, komponen elektronik, dan sistem
                    digital.
                    Juga mencakup perakitan, pemrograman mikrokontroller, serta pengendalian otomatis. Keselamatan
                    kerja,
                    troubleshooting, dan teknologi embedded menjadi fokus penting.
                </p>
                <button
                    class="bg-white text-[#242424] text-lg md:text-xl lg:text-2xl font-medium py-2 px-8 rounded-full">
                    Selengkapnya
                </button>
                <img class="absolute -bottom-20 -right-20 w-48 md:w-64 opacity-30 -rotate-12"
                    src="https://placehold.co/512x512" alt="Decoration">
            </div>

            <!-- Otomotif Department -->
            <div class="w-full lg:w-1/2 department-card bg-customOrange p-6 relative overflow-hidden">
                <div class="info-card bg-white p-2 mb-6">
                    <img class="w-full h-auto rounded-2xl" src="https://placehold.co/868x407" alt="Otomotif Department">
                </div>
                <h2 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6">Otomotif</h2>
                <p class="text-white text-lg md:text-xl mb-8">
                    Departemen Otomotif mempelajari teori sistem kendaraan seperti mesin, transmisi, kelistrikan, bodi,
                    dan
                    suspensi. Lalu mempraktikkannya di bengkel yang akan dibimbing oleh guru pengajar. Mencakup
                    perawatan,
                    perbaikan, dan diagnosa kerusakan kendaraan secara teknis.
                </p>
                <button
                    class="bg-white text-[#242424] text-lg md:text-xl lg:text-2xl font-medium py-2 px-8 rounded-full">
                    Selengkapnya
                </button>
                <img class="absolute -bottom-20 -right-20 w-48 md:w-64 opacity-30 -rotate-12"
                    src="https://placehold.co/512x512" alt="Decoration">
            </div>
        </div>

        <!-- Second Row Departments -->
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Pemesinan Department -->
            <div class="w-full lg:w-1/2 department-card bg-customPink p-6 relative overflow-hidden">
                <div class="info-card bg-white p-2 mb-6">
                    <img class="w-full h-auto rounded-2xl" src="https://placehold.co/868x405"
                        alt="Pemesinan Department">
                </div>
                <h2 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6">Pemesinan</h2>
                <p class="text-white text-lg md:text-xl mb-8">
                    Departemen Pemesinan mempelajari teknik pengoperasian mesin produksi seperti bubut, frais, dan CNC.
                    Juga
                    mencakup gambar teknik, perencanaan proses manufaktur, serta kontrol kualitas produk. Material
                    teknik,
                    keselamatan kerja, dan pemeliharaan mesin menjadi bagian penting dalam praktik industri.
                </p>
                <button
                    class="bg-white text-[#242424] text-lg md:text-xl lg:text-2xl font-medium py-2 px-8 rounded-full">
                    Selengkapnya
                </button>
                <img class="absolute -bottom-20 -right-20 w-48 md:w-64 opacity-25 -rotate-12"
                    src="https://placehold.co/512x512" alt="Decoration">
            </div>

            <!-- TIK Department -->
            <div class="w-full lg:w-1/2 department-card bg-customBlue p-6 relative overflow-hidden">
                <div class="info-card bg-white p-2 mb-6">
                    <img class="w-full h-auto rounded-2xl" src="https://placehold.co/868x407" alt="TIK Department">
                </div>
                <h2 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6">TIK</h2>
                <p class="text-white text-lg md:text-xl mb-8">
                    Departemen TIK atau Teknologi Informasi dan Komunikasi mempelajari pemrograman, jaringan komputer,
                    dan
                    teknologi komunikasi digital. Juga mencakup analisis data, kecerdasan buatan, serta manajemen proyek
                    TI.
                    Etika teknologi dan dokumentasi teknis diajarkan untuk penggunaan yang profesional.
                </p>
                <button
                    class="bg-white text-[#242424] text-lg md:text-xl lg:text-2xl font-medium py-2 px-8 rounded-full">
                    Selengkapnya
                </button>
                <img class="absolute -bottom-20 -right-20 w-48 md:w-64 opacity-30 -rotate-12"
                    src="https://placehold.co/512x512" alt="Decoration">
            </div>
        </div>
    </main>

    <!-- Student Habits Section -->
    <section class="bg-gray-200 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold text-center mb-12">3 KEBIASAAN SISWA/I SKARIGA</h2>

            <div class="flex flex-col lg:flex-row items-stretch gap-8 justify-center">
                <!-- Habit 1 -->
                <div class="w-full lg:w-1/3 habit-card bg-gray-300 p-6 flex flex-col">
                    <img class="w-full h-48 object-cover rounded-lg mb-6" src="https://placehold.co/403x308"
                        alt="Cek Kelengkapan Seragam">
                    <h3 class="text-2xl md:text-3xl font-bold text-center mb-4">Cek Kelengkapan Seragam</h3>
                    <p class="text-lg text-center">
                        Sebelum memasuki sekolah, siswa wajib menunjukan kelengkapan seragam
                    </p>
                </div>

                <!-- Habit 2 (Center - Larger) -->
                <div class="w-full lg:w-2/5 habit-card bg-gray-400 p-6 flex flex-col">
                    <img class="w-full h-64 object-cover rounded-lg mb-6" src="https://placehold.co/578x448"
                        alt="Jalur Hijau">
                    <h3 class="text-3xl md:text-4xl font-bold text-center mb-4">Jalur Hijau</h3>
                    <p class="text-lg text-center">
                        Skariga selalu membiasakan warga sekolah untuk berjalan di jalur hijau, seperti yang diterapkan
                        di industri
                    </p>
                </div>

                <!-- Habit 3 -->
                <div class="w-full lg:w-1/3 habit-card bg-gray-300 p-6 flex flex-col">
                    <img class="w-full h-48 object-cover rounded-lg mb-6" src="https://placehold.co/403x308"
                        alt="Mengaji Pagi">
                    <h3 class="text-2xl md:text-3xl font-bold text-center mb-4">Mengaji Pagi</h3>
                    <p class="text-lg text-center">
                        Bagi siswa muslim, Skariga mengadakan mengaji pagi bersama, seperti membaca juz amma, dan doa
                        pagi.
                        Bagi non Muslim Skariga memberi tempat untuk beribadah pagi
                    </p>
                </div>
            </div>
        </div>  
    </section>

    <!-- Footer -->
    <footer class="bg-[#222325] text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-8 justify-between">
                <!-- School Info -->
                <div class="w-full md:w-1/4">
                    <img class="h-20 mb-4" src="https://placehold.co/146x104" alt="School Logo">
                    <p class="text-[#B9B9B9] text-lg font-bold mb-2">Succes By Discipline</p>
                    <div class="h-px w-full bg-black mb-4"></div>

                    <div class="flex items-start mb-4">
                        <img class="w-8 h-8 mr-2 mt-1" src="https://placehold.co/35x35" alt="Phone Icon">
                        <span class="text-[#828282] text-sm">(0341) 554383</span>
                    </div>

                    <div class="flex items-start">
                        <img class="w-8 h-8 mr-2" src="https://placehold.co/40x40" alt="Email Icon">
                        <a href="mailto:mail.smkpgri3malang@gmail.com" class="text-[#828282] text-sm underline">
                            mail.smkpgri3malang@gmail.com
                        </a>
                    </div>
                </div>

                <!-- About School -->
                <div class="w-full md:w-1/4">
                    <h3 class="text-[#B9B9B9] text-xl font-bold mb-4">Tentang Sekolah</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-[#828282] hover:text-white transition">Beranda</a></li>
                        <li><a href="#" class="text-[#828282] hover:text-white transition">Profil Sekolah</a></li>
                        <li><a href="#" class="text-[#828282] hover:text-white transition">Jurusan</a></li>
                        <li><a href="#" class="text-[#828282] hover:text-white transition">Prestasi</a></li>
                    </ul>
                </div>

                <!-- Information & Services -->
                <div class="w-full md:w-1/4">
                    <h3 class="text-[#B9B9B9] text-xl font-bold mb-4">Informasi & Layanan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-[#828282] hover:text-white transition">Ekstrakurikuler</a></li>
                        <li><a href="#" class="text-[#828282] hover:text-white transition">Alumni</a></li>
                        <li><a href="#" class="text-[#828282] hover:text-white transition">Pendaftaran</a></li>
                    </ul>
                </div>

                <!-- Map -->
                <div class="w-full md:w-1/4 relative">
                    <div class="mapouter" style="position:relative; text-align:right; width:500px; height:450px;">
                        <div class="gmap_canvas"
                            style="overflow:hidden; background:none!important; width:500px; height:450px;">
                            <iframe width="500px" height="450px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://www.google.com/maps/embed/v1/place?q=Jl.%20Raya%20Tlogomas%20Gg.%209%20No.29%2C%20Tlogomas%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065144&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div>
                        <a href="https://norsumediagroup.com/embed-google-map-website-free" target="_blank"
                            rel="noopener noreferrer" class="gme-generated-link">Embed Map on Website for Free</a>
                        <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                        }

                        .gmap_canvas iframe {
                            width: 100%;
                            height: 100%;
                        }

                        .mapouter a {
                            display: block;
                            font-size: 0.85em;
                            text-align: center;
                            padding: 5px 0;
                            color: #6c757d;
                            text-decoration: none;
                        }

                        .gme-generated-link {
                            display: none !important;
                        }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Sidebar -->
    <div class="fixed right-4 top-1/2 transform -translate-y-1/2 shadow-lg rounded-lg overflow-hidden hidden md:block">
        <div class="bg-white p-2">
            <img class="w-12 h-12" src="https://placehold.co/79x79" alt="Social Media">
        </div>
    </div>

    <!-- News Sidebar (Hidden on mobile) -->
    <aside class="hidden xl:block fixed right-0 top-1/4 w-72 bg-white p-4 shadow-lg rounded-l-lg">
        <h3 class="font-bold text-lg mb-4">Berita Terbaru</h3>
        <div class="space-y-6">
            <div>
                <img class="w-full h-32 object-cover rounded mb-2" src="https://placehold.co/361x203" alt="News Image">
                <p class="text-sm font-semibold">Guru Turut Jadi Peserta dalam Perkemahan Pramuka Penegak</p>
            </div>
            <div>
                <img class="w-full h-32 object-cover rounded mb-2" src="https://placehold.co/361x203" alt="News Image">
                <p class="text-sm font-semibold">Sambut Hari Kemerdekaan, SKARIGA Gelar Jalan Sehat dan Aneka Lomba
                    Penuh Semangat</p>
            </div>
            <div>
                <img class="w-full h-32 object-cover rounded mb-2" src="https://placehold.co/361x195" alt="News Image">
                <p class="text-sm font-semibold">Pusdikarhanud Galakkan Gerakan Cinta Sekolah untuk Bentuk Karakter
                    Siswa</p>
            </div>
        </div>
    </aside>
</body>

</html>
