@props(['transparent' => false])

<!-- Wrapper sticky -->
<div x-data="{ scrolled: false }" x-init="
        scrolled = window.scrollY > 50;
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 50;
        });
    " :class="scrolled
        ? 'sticky top-4 z-50 px-4'
        : '{{ $transparent ? 'absolute top-0 left-0 w-full z-50 px-4' : 'sticky top-0 z-50 px-4' }}'
    ">
    <!-- Header/Navigation -->
    <header
        :class="scrolled
            ? 'bg-white text-[#313131] shadow-md rounded-2xl'
            : '{{ $transparent ? 'bg-transparent text-white rounded-2xl' : 'bg-white text-[#313131] rounded-2xl' }}'"
        class="w-full transition-all duration-300 ease-in-out" id="header">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/"><img class="w-16 h-12 md:w-24 md:h-16 object-contain" src="{{ asset('assets/skariga logo 1.png') }}"
                        alt="Logo SMK PGRI 3 Malang"></a>
                    <div class="ml-3 md:ml-4">
                        <div class="text-base md:text-xl font-medium">SMK PGRI 3 MALANG</div>
                        <div class="text-xs md:text-sm font-medium">Succes By Discipline</div>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:block">
                    <ul class="flex space-x-4 lg:space-x-8 text-base md:text-lg font-medium">
                        <li><a href="/"
                                class="{{ request()->is('/') ? 'text-customOrange' : '' }} hover:text-customOrange transition">Beranda</a>
                        </li>
                        <li><a href="/berita"
                                class="{{ request()->is('berita') ? 'text-customOrange' : '' }} hover:text-customOrange transition">Berita</a>
                        </li>
                        <li><a href="/profil"
                                class="{{ request()->is('profil') ? 'text-customOrange' : '' }} hover:text-customOrange transition">Profil</a>
                        </li>
                        <li><a href="/prestasi"
                                class="{{ request()->is('prestasi') ? 'text-customOrange' : '' }} hover:text-customOrange transition">Prestasi</a>
                        </li>
                        <li class="relative group">
                            <a
                                class="{{ request()->is('jurusan') || request()->is('ekskul') ? 'text-customOrange' : '' }} hover:text-customOrange hover:cursor-pointer transition flex items-center">
                                Program
                            </a>
                            <ul
                                class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-200 z-50">
                                <li><a href="/jurusan"
                                        class="{{ request()->is('jurusan') ? 'text-customOrange' : '' }} text-black block px-4 py-2 hover:text-customOrange">Jurusan</a>
                                </li>
                                <li><a href="/ekskul"
                                        class="{{ request()->is('ekskul') ? 'text-customOrange' : '' }} text-black block px-4 py-2 hover:text-customOrange">Ekskrakurikuler</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="/alumni"
                                class="{{ request()->is('alumni') ? 'text-customOrange' : '' }} hover:text-customOrange transition">Alumni</a>
                        </li>
                        <li><a href="#pendaftaran"
                                class="{{ request()->is('pendaftaran') ? 'text-customOrange' : '' }} hover:text-customOrange transition">Pendaftaran</a>
                        </li>
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

@if (!$transparent)
<script>
document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('header');
    document.addEventListener('scroll', () => {
        if (window.scrollY >= 24) {
            header?.classList.add('bg-white', 'text-[#313131]', 'shadow-md');
        } else {
            header?.classList.remove('bg-white', 'text-[#313131]', 'shadow-md');
        }
    });
});
</script>
@endif
