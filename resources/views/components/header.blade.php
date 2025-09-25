<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Alpine JS -->
    <script src="//unpkg.com/alpinejs" defer></script>
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
                height: {
                    'screen-minus-88': 'calc(100vh - 87.97px)',
                }
            }
        }
    }
    </script>

    <style>
    body {
        font-family: 'Poppins', sans-serif;
        scroll-behavior: smooth;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
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

    /* Loading animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 1s ease forwards;
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

@props(['transparent' => false])

<!-- Header/Navigation -->
<header x-data="{ scrolled: window.scrollY > 50 }" x-init="
        const onScroll = () => { scrolled = window.scrollY > 50 };
        window.addEventListener('scroll', onScroll);
        onScroll(); // jalankan sekali saat load
    " :class="scrolled
        ? 'bg-white text-[#313131] shadow-md'
        : '{{ $transparent ? 'bg-transparent text-white' : 'bg-white text-[#313131] shadow-md' }}'"
    class="{{ $transparent ? 'fixed top-0 left-0 w-full z-50 transition-all duration-300 ease-in-out' : 'sticky top-0 left-0 w-full bg-white z-50' }}">
    <div class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img class="w-16 h-12 md:w-24 md:h-16 object-contain" src="{{ asset('assets/skariga logo 1.png') }}"
                    alt="Logo SMK PGRI 3 Malang">
                <div class="ml-3 md:ml-4">
                    <div class="text-base md:text-xl font-medium">SMK PGRI 3 MALANG</div>
                    <div class="text-xs md:text-sm font-medium">Succes By Discipline</div>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:block">
                <ul class="flex space-x-4 lg:space-x-8 text-base md:text-lg font-medium">
                    <li><a href="/" class="hover:text-customOrange transition">Beranda</a></li>
                    <li><a href="/profil" class="hover:text-customOrange transition">Profil</a></li>
                    <li><a href="/prestasi" class="hover:text-customOrange transition">Prestasi</a></li>
                    <li><a href="#program" class="hover:text-customOrange transition">Program</a></li>
                    <li><a href="/alumni" class="hover:text-customOrange transition">Alumni</a></li>
                    <li><a href="#pendaftaran" class="hover:text-customOrange transition">Pendaftaran</a></li>
                </ul>
            </nav>

            <!-- Mobile menu button -->
            <div class="md:hidden hamburger" id="hamburger">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="nav-menu mt-2 md:hidden" id="navMenu">
            <ul class="space-y-2 pb-4 text-lg font-medium">
                <li><a href="/" class="block py-2 hover:text-customOrange transition">Beranda</a></li>
                <li><a href="/profil" class="block py-2 hover:text-customOrange transition">Profil</a></li>
                <li><a href="#prestasi" class="block py-2 hover:text-customOrange transition">Prestasi</a></li>
                <li><a href="#program" class="block py-2 hover:text-customOrange transition">Program</a></li>
                <li><a href="#alumni" class="block py-2 hover:text-customOrange transition">Alumni</a></li>
                <li><a href="#pendaftaran" class="block py-2 hover:text-customOrange transition">Pendaftaran</a></li>
            </ul>
        </div>
    </div>
</header>
