<x-layout title="Prestasi - SMK PGRI 3 Malang">
<div class="bg-gray-50 font-sans text-gray-900 relative overflow-hidden">

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-10 relative z-10">
        <div class="flex flex-col justify-center space-y-6">
            <div class="flex items-center gap-3 mb-4">
                <img src="{{ asset('assets/trophy.png') }}" class="w-10 h-10 drop-shadow-md animate-bounce" alt="Trophy">
                <h2 class="text-3xl font-bold leading-tight transition-transform duration-300 transform hover:scale-105">
                    SKARIGA, Sekolahnya <br />
                    Sang Juara! <br />
                    Gabung Skariga untuk <br />
                    Menjadi Sang Juara Selanjutnya!
                </h2>
            </div>
            <button class="w-max bg-blue-600 text-white px-6 py-3 rounded-full flex items-center gap-2 transition transform hover:-translate-y-1 hover:bg-blue-700 hover:shadow-lg"
                onclick="alert('Daftar Sekarang clicked!')">
                <span>Daftar Sekarang</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </button>
        </div>

        <div class="grid grid-cols-2 gap-4 relative">
            <div class="absolute -top-4 -left-4 bg-yellow-400 text-yellow-900 px-3 py-1 rounded-full text-sm font-bold shadow-lg animate-bounce hover:scale-105 z-20">
                🏆 Juara Nasional
            </div>
            <img src="{{ asset('assets/skariga pres.jpeg') }}" class="rounded-lg shadow-md w-full aspect-[4/3] object-cover transition-transform duration-300 hover:scale-105 hover:brightness-105" alt="Juara Seleksi Nasional 2024"/>
           <!-- Kanan (foto tinggi) -->
<img src="{{ asset('assets/robot-manu.jpg') }}"
     class="rounded-lg shadow-md w-full row-span-2 object-cover max-h-[32rem] transition-transform duration-300 hover:scale-105 hover:brightness-105 hover:-translate-y-1"
     alt="RMS"/>

            <img src="{{ asset('assets/skariga prestasi.jpg') }}" class="rounded-lg shadow-md w-full aspect-[4/3] object-cover transition-transform duration-300 hover:scale-105 hover:brightness-105" alt="Juara Car Painting"/>
    </section>

    <!-- Stats Section -->
    <section class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl p-6 text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
                <div class="text-gray-600">Kejuaraan</div>
            </div>
            <div class="bg-white rounded-xl p-6 text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                <div class="text-3xl font-bold text-green-600 mb-2">100+</div>
                <div class="text-gray-600">Siswa Berprestasi</div>
            </div>
            <div class="bg-white rounded-xl p-6 text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                <div class="text-3xl font-bold text-orange-600 mb-2">20+</div>
                <div class="text-gray-600">Bidang Lomba</div>
            </div>
            <div class="bg-white rounded-xl p-6 text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                <div class="text-3xl font-bold text-purple-600 mb-2">10+</div>
                <div class="text-gray-600">Tahun Berprestasi</div>
            </div>
        </div>
    </section>

    <!-- Para Jawara Section -->
    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="bg-white rounded-xl shadow-lg p-8 transition-transform duration-300 hover:-translate-y-1 relative">
            <img src="{{ asset('assets/trophy.png') }}" class="absolute -top-6 -right-6 w-16 h-16 drop-shadow-md animate-bounce" alt="Trophy">

            <div class="bg-gray-100 rounded-xl shadow-lg px-6 py-4 grid grid-cols-3 items-center transition-transform duration-300 hover:scale-105 relative">
                <div class="flex space-x-2">
                    <span class="w-4 h-4 rounded-full bg-red-500 transition-transform duration-300 hover:scale-110"></span>
                    <span class="w-4 h-4 rounded-full bg-yellow-500 transition-transform duration-300 hover:scale-110"></span>
                    <span class="w-4 h-4 rounded-full bg-green-500 transition-transform duration-300 hover:scale-110"></span>
                </div>
                <h2 class="text-2xl font-bold text-center transition-transform duration-300 hover:scale-105">PARA JAWARA!</h2>
                <div></div>
            </div>

            <div class="space-y-8 mt-6">

                <!-- Baris 1: 2 foto -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                        <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold transition-transform duration-300 hover:scale-105">1</div>
                        <img src="{{ asset('assets/indust-cont.jpg') }}" alt="Juara 1" class="w-full h-48 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300 hover:scale-105 hover:brightness-105">
                        <p class="font-semibold">Syahril Faisal Ramadani</p>
                        <p class="text-sm text-gray-500">Pemenang Juara 1 LKS DikMen Jawa Timur ke 33, dibidang Industrial Control</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                        <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold transition-transform duration-300 hover:scale-105">1</div>
                        <img src="{{ asset('assets/electronics.jpg') }}" alt="Juara 2" class="w-full h-48 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300 hover:scale-105 hover:brightness-105">
                        <p class="font-semibold">Yohan Aldi Pratama</p>
                        <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang Electronics</p>
                    </div>
                </div>

                <!-- Baris 2: 3 foto -->
                <div class="grid grid-cols-3 gap-6">
                    <div class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                        <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold transition-transform duration-300 hover:scale-105">1</div>
                        <img src="{{ asset('assets/robot manufac.png') }}" alt="Juara 3" class="w-full h-48 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300 hover:scale-105 hover:brightness-105">
                        <p class="font-semibold">Azriel & Celvin</p>
                        <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang Robot Manufacturing System</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                        <div class="absolute -top-2 -right-2 bg-yellow-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold transition-transform duration-300 hover:scale-105">2</div>
                        <img src="{{ asset('assets/webtechn.jpeg') }}" alt="Juara 4" class="w-full h-48 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300 hover:scale-105 hover:brightness-105">
                        <p class="font-semibold">Arif Kurniawan</p>
                        <p class="text-sm text-gray-500">Pemenang Juara 2 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang Web Technology</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                        <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold transition-transform duration-300 hover:scale-105">1</div>
                        <img src="{{ asset('assets/car paint.jpeg') }}" alt="Juara 5" class="w-full h-48 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300 hover:scale-105 hover:brightness-105">
                        <p class="font-semibold">Tegar Reyhan</p>
                        <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang Car Painting</p>
                    </div>
                </div>

                <!-- Baris 3: 2 foto -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                        <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold transition-transform duration-300 hover:scale-105">1</div>
                        <img src="{{ asset('assets/uiux.jpg') }}" alt="Juara 6" class="w-full h-48 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300 hover:scale-105 hover:brightness-105">
                        <p class="font-semibold">Kayana Indrasta</p>
                        <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Sistem Informasi Festival 2024, dibidang UI/UX Desain</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                        <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold transition-transform duration-300 hover:scale-105">1</div>
                        <img src="{{ asset('assets/it software.png') }}" alt="Juara 7" class="w-full h-48 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300 hover:scale-105 hover:brightness-105">
                        <p class="font-semibold">Edsel Param Mustapa</p>
                        <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang IT Software Solution For Business</p>
                    </div>
                </div>

                <!-- Baris 4: 3 foto -->
                <div class="grid grid-cols-3 gap-6">
                    <div class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                        <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold transition-transform duration-300 hover:scale-105">1</div>
                        <img src="{{ asset('assets/prototype model.png') }}" alt="Juara 8" class="w-full h-48 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300 hover:scale-105 hover:brightness-105">
                        <p class="font-semibold">Iza Aska</p>
                        <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang Prototype Modeling</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                        <div class="absolute -top-2 -right-2 bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold transition-transform duration-300 hover:scale-105">3</div>
                        <img src="{{ asset('assets/marketing.jpeg') }}" alt="Juara 9" class="w-full h-48 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300 hover:scale-105 hover:brightness-105">
                        <p class="font-semibold">Ayu Dewi</p>
                        <p class="text-sm text-gray-500">Pemenang Juara 3 Lomba Kompetensi Siswa Jawa Timur ke 32, dibidang Marketing Online</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 hover:border hover:border-blue-500 relative">
                        <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold transition-transform duration-300 hover:scale-105">1</div>
                        <img src="{{ asset('assets/manufac system.jpg') }}" alt="Juara 10" class="w-full h-48 aspect-[4/3] object-cover rounded-lg mb-4 transition-transform duration-300 hover:scale-105 hover:brightness-105">
                        <p class="font-semibold">Rafif & Novaldi</p>
                        <p class="text-sm text-gray-500">Pemenang Juara 1 LKS DIKMEN Jawa Timur 33, dibidang Robot Manufacturing System</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</x-layout>
