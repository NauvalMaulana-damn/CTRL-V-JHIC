<x-layout title="Prestasi - SMK PGRI 3 Malang">
    <div class="h-full h-max-content container mx-auto px-4 py-6">
        <!-- Hero Section -->
        <section class="w-full container mx-auto py-12 grid grid-cols-1 md:grid-cols-2 gap-10 relative z-10">
            <div class="flex flex-col justify-center space-y-6">
                <div class="flex items-center gap-3 mb-4">
                    <h2
                        class="text-3xl font-bold leading-tight transition-transform duration-300 transform">
                        SKARIGA, Sekolahnya <br />
                        Sang Juara! <br />
                        Gabung Skariga untuk <br />
                        Menjadi Sang Juara Selanjutnya!
                    </h2>
                </div>
                <a href="">
                    <button class="w-max bg-customBlue text-white px-6 py-3 rounded-full flex items-center gap-2
                    transition transform hover:-translate-y-1 hover:bg-customOrange hover:shadow-lg">
                <span>Daftar Sekarang</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6">
                    </path>
                </svg>
                </button>
                </a>
            </div>

            <div class="grid grid-cols-2 gap-4 relative">
                <div class="relative flex justify-end items-center h-[350px] translate-x-56">
                    <!-- Kartu 1 -->
                    <div
                        class="absolute w-80 h-72 bg-gray-400 rounded-xl shadow-xl transition-transform duration-500 transform -translate-x-32 rotate-[-10deg] z-10 hover:z-30 hover:scale-110 hover:-translate-y-4 hover:rotate-0">
                        <img src="{{ asset('assets/robot-manu.jpg') }}" alt="Foto 1"
                            class="w-full h-full object-cover rounded-xl">
                    </div>

                    <!-- Kartu 2 (tengah) -->
                    <div
                        class="absolute w-80 h-72 bg-gray-500 rounded-xl shadow-xl transition-transform duration-500 transform  -translate-y-6 z-20 hover:z-30 hover:scale-110 hover:-translate-y-4 hover:rotate-0">
                        <div
                            class="absolute -top-4 -left-4 bg-yellow-400 text-yellow-900 px-3 py-1 rounded-full text-sm font-bold shadow-lg animate-bounce hover:scale-105 z-20">
                            🏆 Juara Nasional
                        </div>
                        <img src="{{ asset('assets/skariga pres.jpeg') }}" alt="Foto 2"
                            class="w-full h-full object-cover rounded-xl">
                    </div>

                    <!-- Kartu 3 -->
                    <div
                        class="absolute w-80 h-72 bg-black rounded-xl shadow-xl transition-transform duration-500 transform translate-x-32 translate-y-6 rotate-[10deg] z-0 hover:z-30 hover:scale-110 hover:-translate-y-4 hover:rotate-0">
                        <img src="{{ asset('assets/skariga prestasi.jpg') }}" alt="Foto 3"
                            class="w-full h-full object-cover rounded-xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="w-full mx-auto py-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div
                    class="bg-gray-300/50 backdrop-blur-md rounded-xl p-6 text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                    <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
                    <div class="text-gray-600">Kejuaraan</div>
                </div>
                <div
                    class="bg-gray-300/50 backdrop-blur-md rounded-xl p-6 text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                    <div class="text-3xl font-bold text-green-600 mb-2">100+</div>
                    <div class="text-gray-600">Siswa Berprestasi</div>
                </div>
                <div
                    class="bg-gray-300/50 backdrop-blur-md rounded-xl p-6 text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                    <div class="text-3xl font-bold text-orange-600 mb-2">20+</div>
                    <div class="text-gray-600">Bidang Lomba</div>
                </div>
                <div
                    class="bg-gray-300/50 backdrop-blur-md rounded-xl p-6 text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                    <div class="text-3xl font-bold text-purple-600 mb-2">10+</div>
                    <div class="text-gray-600">Tahun Berprestasi</div>
                </div>
            </div>
        </section>

        <!-- Para Jawara Section -->
        <div class="w-full mx-auto py-8">
            <div
                class="bg-white rounded-xl shadow-lg p-8 transition-transform duration-300 hover:-translate-y-1  hover:scale-10 relative">
                <img src="{{ asset('assets/trophy.png') }}"
                    class="absolute -top-6 -right-6 w-16 h-16 drop-shadow-md animate-bounce" alt="Trophy">

                <div
                    class="bg-gray-100 rounded-xl shadow-lg px-6 py-4 grid grid-cols-3 items-center transition-transform duration-300 hover:scale-105 relative">
                    <div class="flex space-x-2">
                        <span
                            class="w-4 h-4 rounded-full bg-red-500 transition-transform duration-300 hover:scale-110"></span>
                        <span
                            class="w-4 h-4 rounded-full bg-yellow-500 transition-transform duration-300 hover:scale-110"></span>
                        <span
                            class="w-4 h-4 rounded-full bg-green-500 transition-transform duration-300 hover:scale-110"></span>
                    </div>
                    <h2 class="text-2xl font-bold text-center transition-transform duration-300">PARA
                        JAWARA!</h2>
                    <div></div>
                </div>

                <div class="space-y-8 mt-6">

                    <!-- Baris 1: 2 foto -->
                    <div class="grid grid-cols-2 gap-6">
                        <div
                            class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                            <div
                                class="absolute text-4xl right-[0.15rem] rotate-12 top-2 rounded-full w-8 h-8 flex items-center justify-center font-bold transition-transform duration-300">
                                🏅</div>
                            <img src="{{ asset('assets/indust-cont.jpg') }}" alt="Juara 1"
                                class="w-full h-80 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300">
                            <p class="font-semibold">Syahril Faisal Ramadani</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 LKS DikMen Jawa Timur ke 33, dibidang
                                Industrial Control</p>
                        </div>
                        <div
                            class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                            <div
                                class="absolute text-4xl right-[0.15rem] rotate-12 top-2 rounded-full w-8 h-8 flex items-center justify-center font-bold transition-transform duration-300">
                                🏅</div>
                            <img src="{{ asset('assets/electronics.jpg') }}" alt="Juara 2"
                                class="w-full h-80 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300">
                            <p class="font-semibold">Yohan Aldi Pratama</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang Electronics</p>
                        </div>
                    </div>

                    <!-- Baris 2: 3 foto -->
                    <div class="grid grid-cols-3 gap-6">
                        <div
                            class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                            <div
                                class="absolute text-4xl right-[0.15rem] rotate-12 top-2 rounded-full w-8 h-8 flex items-center justify-center font-bold transition-transform duration-300">
                                🏅</div>
                            <img src="{{ asset('assets/robot manufac.png') }}" alt="Juara 3"
                                class="w-full h-80 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300">
                            <p class="font-semibold">Azriel & Celvin</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang Robot Manufacturing System</p>
                        </div>
                        <div
                            class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                            <div
                                class="absolute text-4xl right-[0.15rem] rotate-12 top-2 rounded-full w-8 h-8 flex items-center justify-center font-bold transition-transform duration-300">
                                🏅</div>
                            <img src="{{ asset('assets/webtechn.jpeg') }}" alt="Juara 4"
                                class="w-full h-80 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300">
                            <p class="font-semibold">Arif Kurniawan</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 2 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang Web Technology</p>
                        </div>
                        <div
                            class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                            <div
                                class="absolute text-4xl right-[0.15rem] rotate-12 top-2 rounded-full w-8 h-8 flex items-center justify-center font-bold transition-transform duration-300">
                                🏅</div>
                            <img src="{{ asset('assets/car paint.jpeg') }}" alt="Juara 5"
                                class="w-full h-80 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300">
                            <p class="font-semibold">Tegar Reyhan</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang Car Painting</p>
                        </div>
                    </div>

                    <!-- Baris 3: 2 foto -->
                    <div class="grid grid-cols-2 gap-6">
                        <div
                            class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                            <div
                                class="absolute text-4xl right-[0.15rem] rotate-12 top-2 rounded-full w-8 h-8 flex items-center justify-center font-bold transition-transform duration-300">
                                🏅</div>
                            <img src="{{ asset('assets/uiux.jpg') }}" alt="Juara 6"
                                class="w-full h-80 aspect-[3/2] object-cover rounded-lg mb-4 transition-transform duration-300">
                            <p class="font-semibold">Kayana Indrasta</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Sistem Informasi Festival 2024,
                                dibidang UI/UX Desain</p>
                        </div>
                        <div
                            class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                            <div
                                class="absolute text-4xl right-[0.15rem] rotate-12 top-2 rounded-full w-8 h-8 flex items-center justify-center font-bold transition-transform duration-300">
                                🏅</div>
                            <img src="{{ asset('assets/it software.png') }}" alt="Juara 7"
                                class="w-full h-80 aspect-[3/2] object-cover rounded-lg mb-4 transition-transform duration-300">
                            <p class="font-semibold">Edsel Param Mustapa</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang IT Software Solution For Business</p>
                        </div>
                    </div>

                    <!-- Baris 4: 3 foto -->
                    <div class="grid grid-cols-3 gap-6">
                        <div
                            class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                            <div
                                class="absolute text-4xl right-[0.15rem] rotate-12 top-2 rounded-full w-8 h-8 flex items-center justify-center font-bold transition-transform duration-300">
                                🏅</div>
                            <img src="{{ asset('assets/prototype model.png') }}" alt="Juara 8"
                                class="w-full h-80 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300">
                            <p class="font-semibold">Iza Aska</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang Prototype Modeling</p>
                        </div>
                        <div
                            class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                            <div
                                class="absolute text-4xl right-[0.15rem] rotate-12 top-2 rounded-full w-8 h-8 flex items-center justify-center font-bold transition-transform duration-300">
                                🏅</div>
                            <img src="{{ asset('assets/marketing.jpeg') }}" alt="Juara 9"
                                class="w-full h-80 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300">
                            <p class="font-semibold">Ayu Dewi</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 3 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang Marketing Online</p>
                        </div>
                        <div
                            class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                            <div
                                class="absolute text-4xl right-[0.15rem] rotate-12 top-2 rounded-full w-8 h-8 flex items-center justify-center font-bold transition-transform duration-300">
                                🏅</div>
                            <img src="{{ asset('assets/manufac system.jpg') }}" alt="Juara 10"
                                class="w-full h-80 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300">
                            <p class="font-semibold">Rafif & Novaldi</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 LKS DIKMEN Jawa Timur 33, dibidang Robot
                                Manufacturing System</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layout>
