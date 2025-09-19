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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
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
                <li><a href="#pendaftaran" class="block py-2 hover:text-customOrange transition">Pendaftaran</a>
                </li>
            </ul>
        </div>
    </div>
</header>
