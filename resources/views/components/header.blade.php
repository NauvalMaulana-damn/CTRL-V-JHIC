@props(['transparent' => false])

<!-- Wrapper sticky + padding top -->
<div class="sticky top-4 z-50 px-4">
    <!-- Header/Navigation -->
    <header x-data="{ scrolled: false }" x-init="
            scrolled = window.scrollY > 50;

            const onScroll = () => {
                scrolled = window.scrollY > 50;
            };

            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    requestAnimationFrame(() => {
                        onScroll();
                        ticking = false;
                    });
                    ticking = true;
                }
            });
        "
        :class="scrolled
            ? 'bg-white text-[#313131] shadow-md rounded-2xl'
            : '{{ $transparent ? 'bg-transparent text-white rounded-2xl' : 'bg-white text-[#313131] shadow-md rounded-2xl' }}'"
        class="w-full transition-all duration-300 ease-in-out" id="header">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Logo -->
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
                        <li class="relative group">
                            <a href="#program" class="hover:text-customOrange transition flex items-center">
                                Program
                                <svg class="w-3 h-3 ml-1 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M5.23 7.21a.75.75 0 011.06-.02L10 10.67l3.71-3.48a.75.75 0 111.04 1.08l-4.25 4a.75.75 0 01-1.04 0l-4.25-4a.75.75 0 01-.02-1.06z" />
                                </svg>
                            </a>
                            <ul
                                class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-200 z-50">
                                <li><a href="/jurusan" class="block px-4 py-2 hover:bg-gray-100">Jurusan</a></li>
                                <li><a href="/ekskul" class="block px-4 py-2 hover:bg-gray-100">Ekskrakurikuler</a></li>
                            </ul>
                        </li>
                        <li><a href="/alumni" class="hover:text-customOrange transition">Alumni</a></li>
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
                <ul class="space-y-2 pb-4 text-lg font-medium">
                    <li><a href="/" class="block py-2 hover:text-customOrange transition">Beranda</a></li>
                    <li><a href="/profil" class="block py-2 hover:text-customOrange transition">Profil</a></li>
                    <li><a href="/prestasi" class="block py-2 hover:text-customOrange transition">Prestasi</a></li>
                    <li><a href="/program" class="block py-2 hover:text-customOrange transition">Program</a></li>
                    <li><a href="/alumni" class="block py-2 hover:text-customOrange transition">Alumni</a></li>
                    <li><a href="#pendaftaran" class="block py-2 hover:text-customOrange transition">Pendaftaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</div>
