<x-layout title="Prestasi - SMK PGRI 3 Malang">
    <div class="h-full container mx-auto px-4 py-6">
        <!-- Hero Section -->
        <!-- ✅ Versi Desktop (tetap seperti semula) -->
        <section class="hidden lg:grid w-full container mx-auto py-12 grid-cols-2 gap-10 relative z-10">
            <div class="flex flex-col justify-center space-y-6">
                <div class="flex items-center gap-3 mb-4">
                    <h2 class="text-3xl font-bold leading-tight transition-transform duration-300 transform">
                        SKARIGA, Sekolahnya <br />
                        Sang Juara! <br />
                        Gabung SKARIGA untuk <br />
                        Menjadi <span class="bg-yellow-300 px-1 italic">Sang Juara Selanjutnya!</span>
                    </h2>
                </div>
                <a href="" class="w-max">
                    <button
                        class="w-max bg-customBlue text-white px-6 py-3 rounded-full flex items-center gap-2
                    transition transform hover:scale-105 hover:bg-customOrange hover:shadow-lg">
                        <span>Daftar Sekarang</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                </a>
            </div>

            <div class="grid grid-cols-2 gap-4 relative">
                <div class="relative flex justify-end items-center h-[350px] translate-x-56">
                    <!-- Kartu 1 -->
                    <div
                        class="absolute w-80 h-72 bg-gray-400 rounded-xl shadow-xl transition-transform duration-500 transform -translate-x-32 rotate-[-10deg] z-0 hover:z-30 hover:scale-110 hover:-translate-y-4 hover:rotate-0">
                        <div
                            class="absolute -top-4 -left-4 bg-green-400 text-green-900 px-3 py-1 rounded-full text-sm font-bold shadow-lg z-20 cursor-default">
                            🥇 Juara Provinsi
                        </div>
                        <img src="{{ asset('assets/robot-manu.jpg') }}" alt="Foto 1"
                            class="w-full h-full object-cover rounded-xl">
                    </div>

                    <!-- Kartu 2 -->
                    <div
                        class="absolute w-80 h-72 bg-gray-500 rounded-xl shadow-xl transition-transform duration-500 transform -translate-y-6 z-10 hover:z-30 hover:scale-110 hover:-translate-y-4 hover:rotate-0">
                        <div
                            class="absolute -top-4 -left-4 bg-sky-400 text-sky-950 px-3 py-1 rounded-full text-sm font-bold shadow-lg z-20 cursor-default">
                            🎗️ Juara Nasional
                        </div>
                        <img src="{{ asset('assets/skariga prestasi.jpg') }}" alt="Foto 2"
                            class="w-full h-full object-cover rounded-xl">
                    </div>

                    <!-- Kartu 3 -->
                    <div
                        class="absolute w-80 h-72 bg-black rounded-xl shadow-xl transition-transform duration-500 transform translate-x-32 translate-y-6 rotate-[10deg] z-20 hover:z-30 hover:scale-110 hover:-translate-y-4 hover:rotate-0">
                        <div
                            class="absolute -top-4 -left-4 bg-yellow-400 text-yellow-900 px-3 py-1 rounded-full text-sm font-bold shadow-lg z-0 cursor-default">
                            🏆 Juara Internasional
                        </div>
                        <img src="{{ asset('assets/skariga intl.webp') }}" alt="Foto 3"
                            class="w-full h-full object-cover rounded-xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- ✅ Versi Mobile & Tablet -->
        <section class="lg:hidden w-full py-10 text-center">
            <h2 class="text-2xl font-bold leading-snug mb-6">
                SKARIGA, Sekolahnya <br />
                Sang Juara! <br />
                Gabung SKARIGA untuk <br />
                Menjadi <span class="bg-yellow-300 px-1 italic">Sang Juara Selanjutnya!</span>
            </h2>
            <div class="flex justify-center mb-10">
                <button
                    class="bg-customBlue text-white px-6 py-3 rounded-full flex items-center gap-2
                    transition transform hover:scale-105 hover:bg-customOrange hover:shadow-lg">
                    <span>Daftar Sekarang</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </button>
            </div>

            <hr class="w-full h-px bg-gray-300 border-0 mt-4 mb-4">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div
                    class="bg-green-400 text-green-900 px-3 py-1 rounded-full text-sm font-bold shadow-lg z-20 cursor-default">
                    🥇 Juara Provinsi
                </div>
                <div class="w-full h-80 bg-gray-400 rounded-xl shadow-xl overflow-hidden">
                    <img src="{{ asset('assets/robot-manu.jpg') }}" class="w-full h-full object-cover" alt="">
                </div>
                <div
                    class="bg-sky-400 text-sky-950 px-3 py-1 rounded-full text-sm font-bold shadow-lg z-20 cursor-default">
                    🎗️ Juara Nasional
                </div>
                <div class="w-full h-80 bg-gray-500 rounded-xl shadow-xl overflow-hidden">
                    <img src="{{ asset('assets/skariga prestasi.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div
                    class="bg-yellow-400 text-yellow-900 px-3 py-1 rounded-full text-sm font-bold shadow-lg z-0 cursor-default">
                    🏆 Juara Internasional
                </div>
                <div class="w-full h-80 bg-black rounded-xl shadow-xl overflow-hidden sm:col-span-2">
                    <img src="{{ asset('assets/skariga intl.webp') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
            </div>
        </section>

        <!-- ✅ Section lainnya (stats + para jawara) tetap responsif -->
        <section class="w-full mx-auto py-8">
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6">
                <div class="bg-gray-300/50 rounded-xl p-4 sm:p-6 text-center shadow-md">
                    <div class="text-2xl sm:text-3xl font-bold text-blue-600 mb-1 sm:mb-2">50+</div>
                    <div class="text-gray-600 text-sm sm:text-base">Kejuaraan</div>
                </div>
                <div class="bg-gray-300/50 rounded-xl p-4 sm:p-6 text-center shadow-md">
                    <div class="text-2xl sm:text-3xl font-bold text-green-600 mb-1 sm:mb-2">100+</div>
                    <div class="text-gray-600 text-sm sm:text-base">Siswa Berprestasi</div>
                </div>
                <div class="bg-gray-300/50 rounded-xl p-4 sm:p-6 text-center shadow-md">
                    <div class="text-2xl sm:text-3xl font-bold text-orange-600 mb-1 sm:mb-2">20+</div>
                    <div class="text-gray-600 text-sm sm:text-base">Bidang Lomba</div>
                </div>
                <div class="bg-gray-300/50 rounded-xl p-4 sm:p-6 text-center shadow-md">
                    <div class="text-2xl sm:text-3xl font-bold text-purple-600 mb-1 sm:mb-2">10+</div>
                    <div class="text-gray-600 text-sm sm:text-base">Tahun Berprestasi</div>
                </div>
            </div>
        </section>

        <!-- ✅ Section Para Jawara tetap responsif -->
        <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8">
            <div class="w-full mx-auto py-8" x-data="{ page: 1, perPage: 6 }">
                <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 mb-6 relative">
                    <div
                        class="bg-gray-100 rounded-xl shadow-lg px-4 sm:px-6 py-3 sm:py-4 grid grid-cols-3 items-center mb-6">
                        <div class="flex space-x-2">
                            <span class="w-3 h-3 sm:w-4 sm:h-4 rounded-full bg-red-500"></span>
                            <span class="w-3 h-3 sm:w-4 sm:h-4 rounded-full bg-yellow-500"></span>
                            <span class="w-3 h-3 sm:w-4 sm:h-4 rounded-full bg-green-500"></span>
                        </div>

                        <div class="flex items-center justify-center">
                            <!-- Trophy di samping tulisan -->
                            <h2 class="text-4xl sm:text-5xl font-bold text-center"
                                style="text-shadow: 2px 2px 5px #FFD700;">
                                PARA JAWARA
                            </h2>
                            <img src="{{ asset('assets/troph-pres.png') }}"
                                class="w-50 h-50 sm:w-14 sm:h-14 drop-shadow-md transform -rotate-12 ml-3"
                                alt="Trophy">
                        <div></div>
                        </div>
                        <div></div>
                    </div>

                    @php
                        $juaras = [
                            [
                                'assets/indust-cont.jpg',
                                'Syahril Faisal Ramadani',
                                'Juara 1 LKS DikMen Jatim 33 - Industrial
                    Control',
                            ],
                            ['assets/electronics.jpg', 'Yohan Aldi Pratama', 'Juara 1 LKS Jatim 32 - Electronics'],
                            [
                                'assets/robot manufac.png',
                                'Azriel & Celvin',
                                'Juara 1 LKS Jatim 32 - Robot Manufacturing
                    System',
                            ],
                            ['assets/webtechn.jpeg', 'Arif Kurniawan', 'Juara 2 LKS Jatim 32 - Web Technology'],
                            ['assets/car paint.jpeg', 'Tegar Reyhan', 'Juara 1 LKS Jatim 32 - Car Painting'],
                            [
                                'assets/uiux.jpg',
                                'Kayana Indrasta',
                                'Juara 1 Lomba Sistem Informasi Festival 2024 - UI/UX
                    Desain',
                            ],
                            [
                                'assets/it software.png',
                                'Edsel Param Mustapa',
                                'Juara 1 LKS Jatim 32 - IT Software Solution',
                            ],
                            ['assets/prototype model.png', 'Iza Aska', 'Juara 1 LKS Jatim 32 - Prototype Modeling'],
                            ['assets/marketing.jpeg', 'Ayu Dewi', 'Juara 3 LKS Jatim 32 - Marketing Online'],
                            [
                                'assets/manufac system.jpg',
                                'Rafif & Novaldi',
                                'Juara 1 LKS DikMen Jatim 33 - Robot
                    Manufacturing
                    System',
                            ],
                        ];
                    @endphp

                    <!-- Grid container -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 grid-center-last">
                        <template x-for="(juara, index) in {{ json_encode($juaras) }}" :key="index">
                            <div x-show="index >= (page - 1) * perPage && index < page * perPage"
                                class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                                <div class="absolute text-3xl sm:text-4xl right-1 rotate-12 top-2 font-bold">🏅
                                </div>
                                <img :src="'{{ asset('') }}' + juara[0]" :alt="juara[1]"
                                    class="w-full h-64 sm:h-80 object-cover rounded-lg mb-4">
                                <p class="font-semibold text-sm sm:text-base" x-text="juara[1]"></p>
                                <p class="text-xs sm:text-sm text-gray-500" x-text="juara[2]"></p>
                            </div>
                        </template>
                    </div>

                    <!-- Pagination control -->
                    <div class="flex justify-center mt-6 space-x-2">
                        <button
                            class="px-3 py-1 bg-gray-200 rounded-full hover:bg-gray-300 transition disabled:opacity-50"
                            @click="if (page > 1) { page--; }"
                            :disabled="page === 1">←</button>

                        <template x-for="i in Math.ceil({{ count($juaras) }} / perPage)" :key="i">
                            <button class="px-3 py-1 rounded-full transition"
                                :class="page === i ? 'bg-customBlue text-white' : 'bg-gray-200 hover:bg-gray-300'"
                                @click="page = i;"
                                x-text="i"></button>
                        </template>

                        <button
                            class="px-3 py-1 bg-gray-200 rounded-full hover:bg-gray-300 transition disabled:opacity-50"
                            @click="if (page < Math.ceil({{ count($juaras) }} / perPage)) { page++; }"
                            :disabled="page === Math.ceil({{ count($juaras) }} / perPage)">→</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
