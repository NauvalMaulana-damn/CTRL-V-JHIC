<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK PGRI 3 MALANG</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    customRed: '#FD5353',
                    customOrange: '#E17626',
                    customBlue: '#2492D1',
                    customPink: '#FD467E',
                    customInsta: '#E1306C',
                    darkGray: '#222325',
                },
                fontFamily: {
                    poppins: ['Poppins', 'sans-serif'],
                    inter: ['Inter', 'sans-serif'],
                },
                backgroundImage: {
                    customIG: 'linear-gradient(135deg, #f58529, #dd2a7b, #8134af, #515bd4)',
                },
            }
        }
    }
    </script>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        scroll-behavior: smooth;
    }

    .gradient-overlay {
        background: linear-gradient(180deg, rgba(217, 217, 217, 0) 0%, black 100%);
    }

    .department-card {
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.25);
        border-radius: 48px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .department-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.3);
    }

    .info-card {
        border-radius: 34px;
        overflow: hidden;
    }

    .habit-card {
        border-radius: 25px;
        transition: transform 0.3s ease;
    }

    .habit-card:hover {
        transform: translateY(-5px);
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

    .hamburger {
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .hamburger.active {
        transform: rotate(90deg);
    }

    .nav-menu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s ease-out;
    }

    .nav-menu.active {
        max-height: 500px;
    }

    /* Back to top button */
    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: #FD5353;
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1000;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .back-to-top.visible {
        opacity: 1;
    }

    /* Loading animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.8s ease forwards;
    }

    .delay-100 {
        animation-delay: 0.1s;
    }

    .delay-200 {
        animation-delay: 0.2s;
    }

    .delay-300 {
        animation-delay: 0.3s;
    }

    .delay-400 {
        animation-delay: 0.4s;
    }
    </style>
</head>

<body class="bg-[#F8F8F8]">
    <!-- Loading overlay -->
    <div id="loading"
        class="fixed inset-0 bg-white z-50 flex items-center justify-center transition-opacity duration-500">
        <div class="text-center">
            <div class="w-16 h-16 border-4 border-t-customOrange border-gray-200 rounded-full animate-spin mx-auto"></div>
            <p class="mt-4 text-lg font-semibold">SMK PGRI 3 Malang</p>
        </div>
    </div>

    <!-- Back to top button -->
    <div id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up text-xl"></i>
    </div>

    <!-- Header/Navigation -->
    <header class="sticky top-0 z-40 bg-white shadow-md">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img class="w-16 h-12 md:w-24 md:h-16 object-contain" src="{{ asset('assets/skariga logo 1.png') }}"
                        alt="Logo SMK PGRI 3 Malang">
                    <div class="ml-3 md:ml-4">
                        <div class="text-[#313131] text-base md:text-xl font-medium">SMK PGRI 3 MALANG</div>
                        <div class="text-[#313131] text-xs md:text-sm font-medium">Succes By Discipline</div>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:block">
                    <ul class="flex space-x-4 lg:space-x-8 text-[#313131] text-base md:text-lg font-medium">
                        <li><a href="#" class="hover:text-customOrange transition">Beranda</a></li>
                        <li><a href="#prestasi" class="hover:text-customOrange transition">Prestasi</a></li>
                        <li><a href="#program" class="hover:text-customOrange transition">Program</a></li>
                        <li><a href="#alumni" class="hover:text-customOrange transition">Alumni</a></li>
                        <li><a href="#pendaftaran" class="hover:text-customOrange transition">Pendaftaran</a></li>
                    </ul>
                </nav>

                <!-- Mobile menu button -->
                <div class="md:hidden hamburger" id="hamburger">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div class="nav-menu mt-2 md:hidden" id="navMenu">
                <ul class="space-y-2 pb-4 text-[#313131] text-lg font-medium">
                    <li><a href="#" class="block py-2 hover:text-customOrange transition">Beranda</a></li>
                    <li><a href="#prestasi" class="block py-2 hover:text-customOrange transition">Prestasi</a></li>
                    <li><a href="#program" class="block py-2 hover:text-customOrange transition">Program</a></li>
                    <li><a href="#alumni" class="block py-2 hover:text-customOrange transition">Alumni</a></li>
                    <li><a href="#pendaftaran" class="block py-2 hover:text-customOrange transition">Pendaftaran</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Main content with news sidebar -->
    <div class="flex flex-col lg:flex-row container mx-auto px-4 py-6">
        <!-- Main content -->
        <main class="w-full lg:w-3/4">
            <!-- Hero Section -->
            <section
                class="relative w-full h-[40vh] sm:h-[50vh] md:h-[60vh] lg:h-[70vh] overflow-hidden rounded-xl mb-8 animate-fade-in">
                <div class="swiper mySwiper rounded-xl overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach ([1, 2, 3] as $i)
                        <section class="swiper-slide relative w-full h-[40vh] sm:h-[50vh] md:h-[60vh] lg:h-[70vh]">
                            <img class="w-full h-full object-cover"
                                src="https://placehold.co/1942x956?text=Slide+{{ $i }}" alt="Slide {{ $i }}">
                            <div class="absolute bottom-0 left-0 w-full h-1/2 gradient-overlay"></div>
                            <div class="absolute bottom-6 left-5 md:left-8 text-white max-w-4xl">
                                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2">Judul Slide
                                    {{ $i }}</h1>
                                <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold">Deskripsi konten untuk
                                    slide {{ $i }}</p>
                            </div>
                        </section>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>

            </section>

            <!-- News Ticker -->
            <div class="bg-white py-4 overflow-hidden rounded-lg mb-8 animate-fade-in delay-100">
                <div class="scroll-container flex whitespace-nowrap">
                    <div class="flex space-x-8 md:space-x-12 pr-12">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/125x60"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/155x87"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/182x95"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/115x71"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/174x101"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/177x58"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/125x60"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/155x87"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/182x95"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/115x71"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/174x101"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/177x58"
                            alt="Partner Logo">
                    </div>
                    <!-- Duplicate for seamless loop -->
                    <div class="flex space-x-8 md:space-x-12 pr-12">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/125x60"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/155x87"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/182x95"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/115x71"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/174x101"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/177x58"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/125x60"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/155x87"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/182x95"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/115x71"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/174x101"
                            alt="Partner Logo">
                        <img class="h-6 md:h-10 object-contain inline-block" src="https://placehold.co/177x58"
                            alt="Partner Logo">
                    </div>
                </div>
            </div>

            <!-- Department Sections -->
            <section class="py-6 md:py-10 animate-fade-in delay-200">
                <!-- Elektro Department -->
                <div class="flex flex-col lg:flex-row gap-6 mb-12">
                    <div class="w-full lg:w-1/2 department-card bg-customOrange p-5 md:p-6 relative overflow-hidden">
                        <div class="info-card bg-white p-2 mb-5 md:mb-6">
                            <img class="w-full h-auto rounded-2xl" src="https://placehold.co/868x407"
                                alt="Elektro Department">
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
                        <img class="absolute -bottom-16 -right-16 w-40 md:w-52 opacity-30 -rotate-12"
                            src="https://placehold.co/512x512" alt="Decoration">
                    </div>

                    <!-- Otomotif Department -->
                    <div class="w-full lg:w-1/2 department-card bg-customRed p-5 md:p-6 relative overflow-hidden">
                        <div class="info-card bg-white p-2 mb-5 md:mb-6">
                            <img class="w-full h-auto rounded-2xl" src="https://placehold.co/868x407"
                                alt="Otomotif Department">
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
                        <img class="absolute -bottom-16 -right-16 w-40 md:w-52 opacity-30 -rotate-12"
                            src="https://placehold.co/512x512" alt="Decoration">
                    </div>
                </div>

                <!-- Second Row Departments -->
                <div class="flex flex-col lg:flex-row gap-6">
                    <!-- Pemesinan Department -->
                    <div class="w-full lg:w-1/2 department-card bg-customPink p-5 md:p-6 relative overflow-hidden">
                        <div class="info-card bg-white p-2 mb-5 md:mb-6">
                            <img class="w-full h-auto rounded-2xl" src="https://placehold.co/868x405"
                                alt="Pemesinan Department">
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
                        <img class="absolute -bottom-16 -right-16 w-40 md:w-52 opacity-25 -rotate-12"
                            src="https://placehold.co/512x512" alt="Decoration">
                    </div>

                    <!-- TIK Department -->
                    <div class="w-full lg:w-1/2 department-card bg-customBlue p-5 md:p-6 relative overflow-hidden">
                        <div class="info-card bg-white p-2 mb-5 md:mb-6">
                            <img class="w-full h-auto rounded-2xl" src="https://placehold.co/868x407"
                                alt="TIK Department">
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
                        <img class="absolute -bottom-16 -right-16 w-40 md:w-52 opacity-30 -rotate-12"
                            src="https://placehold.co/512x512" alt="Decoration">
                    </div>
                </div>
            </section>

            <!-- Student Habits Section -->
            <section class="bg-gray-200 py-12 rounded-xl mt-8 animate-fade-in delay-300">
                <div class="container mx-auto px-4">
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-bold text-center mb-8 md:mb-12">3 KEBIASAAN MURID
                        SKARIGA</h2>

                    <div class="flex flex-col lg:flex-row items-stretch gap-6 justify-center">
                        <!-- Habit 1 -->
                        <div class="w-full lg:w-1/3 habit-card bg-gray-300 p-5 flex flex-col">
                            <img class="w-full h-52 md:h-48 object-cover rounded-lg mb-4"
                                src="{{ asset('assets/cekkelengkapan.png') }}" alt="Cek Kelengkapan Seragam">
                            <h3 class="text-xl md:text-2xl font-bold text-center mb-3">Cek Kelengkapan Seragam</h3>
                            <p class="text-base text-center">
                                Sebelum memasuki sekolah, siswa wajib menunjukan kelengkapan seragam
                            </p>
                        </div>

                        <!-- Habit 2 (Center - Larger) -->
                        <div class="w-full lg:w-2/5 habit-card bg-gray-400 p-5 flex flex-col">
                            <img class="w-full h-56 md:h-56 object-cover rounded-lg mb-4"
                                src="{{ asset('assets/jalur_hijau.png') }}" alt="Jalur Hijau">
                            <h3 class="text-2xl md:text-3xl font-bold text-center mb-3">Jalur Hijau</h3>
                            <p class="text-base md:text-lg text-center">
                                SKARIGA selalu membiasakan warga sekolah untuk berjalan di jalur hijau, seperti yang
                                diterapkan di industri
                            </p>
                        </div>

                        <!-- Habit 3 -->
                        <div class="w-full lg:w-1/3 habit-card bg-gray-300 p-5 flex flex-col">
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
                        <img class="w-full h-40 object-cover rounded-lg mb-2 group-hover:opacity-90 transition"
                            src="https://placehold.co/361x203" alt="News Image">
                        <p class="text-sm font-semibold group-hover:text-customOrange transition">Guru Turut Jadi Peserta
                            dalam Perkemahan Pramuka Penegak</p>
                    </div>
                    <div class="group cursor-pointer">
                        <img class="w-full h-40 object-cover rounded-lg mb-2 group-hover:opacity-90 transition"
                            src="https://placehold.co/361x203" alt="News Image">
                        <p class="text-sm font-semibold group-hover:text-customOrange transition">Sambut Hari Kemerdekaan,
                            SKARIGA Gelar Jalan Sehat dan Aneka Lomba Penuh Semangat</p>
                    </div>
                    <div class="group cursor-pointer">
                        <img class="w-full h-40 object-cover rounded-lg mb-2 group-hover:opacity-90 transition"
                            src="https://placehold.co/361x195" alt="News Image">
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
                <h3 class="font-bold text-xl mb-4 border-b-2 border-customBlue pb-2">Link Penting</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-blue-600 hover:underline flex items-center"><i
                                class="fas fa-link mr-2 text-sm"></i>Portal Siswa</a></li>
                    <li><a href="#" class="text-blue-600 hover:underline flex items-center"><i
                                class="fas fa-link mr-2 text-sm"></i>E-Learning</a></li>
                    <li><a href="#" class="text-blue-600 hover:underline flex items-center"><i
                                class="fas fa-link mr-2 text-sm"></i>Perpustakaan Digital</a></li>
                    <li><a href="#" class="text-blue-600 hover:underline flex items-center"><i
                                class="fas fa-link mr-2 text-sm"></i>Kalender Akademik</a></li>
                </ul>
            </div>
        </aside>
    </div>

    <!-- Footer -->
    <x-footer></x-footer>

    <script>
    // Wait for page to fully load
    window.addEventListener('load', function() {
        // Hide loading animation
        document.getElementById('loading').style.opacity = '0';
        setTimeout(function() {
            document.getElementById('loading').style.display = 'none';
        }, 1);

        // Initialize components
        initMobileMenu();
        initBackToTop();
    });

    // Mobile menu functionality
    function initMobileMenu() {
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');

        if (hamburger && navMenu) {
            hamburger.addEventListener('click', function() {
                this.classList.toggle('active');
                navMenu.classList.toggle('active');
            });
        }
    }

    // Back to top button functionality
    function initBackToTop() {
        const backToTopBtn = document.getElementById('backToTop');

        if (backToTopBtn) {
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopBtn.classList.add('visible');
                } else {
                    backToTopBtn.classList.remove('visible');
                }
            });

            backToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    }

    // Add hover effects to department cards
    const departmentCards = document.querySelectorAll('.department-card');
    departmentCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0px 15px 35px rgba(0, 0, 0, 0.3)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0px 10px 30px rgba(0, 0, 0, 0.25)';
        });
    });

    // Swiper JS Initializeconst swiper = new Swiper('.mySwiper', {
    const swiper = new Swiper('.mySwiper', {
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    </script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>
