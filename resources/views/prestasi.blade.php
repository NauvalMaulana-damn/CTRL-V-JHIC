<x-layout title="Prestasi - SMK PGRI 3 Malang">
    <style>
    /* Scrollbar untuk kartu jawara (jika overflow) */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Animasi tambahan untuk hover - DIKURANGI INTENSITASNYA */
    .hover-lift {
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .hover-scale {
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .hover-scale:hover {
        transform: scale(1.03);
    }

    .hover-glow:hover {
        box-shadow: 0 0 15px rgba(59, 130, 246, 0.3);
    }

    .hover-rotate:hover {
        transform: rotate(1deg);
    }

    .hover-brightness:hover {
        filter: brightness(1.05);
    }

    .hover-border-blue:hover {
        border: 1.5px solid #3b82f6;
    }

    .hover-text-white:hover {
        color: white;
    }

    .hover-bg-blue:hover {
        background-color: #3b82f6;
    }

    .hover-pulse:hover {
        animation: pulse 1.5s ease-in-out infinite;
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.02); }
        100% { transform: scale(1); }
    }

    /* ANIMASI YANG TERLALU GETAR DIHAPUS/HALUSKAN */
    .hover-subtle-shake:hover {
        animation: subtle-shake 0.6s ease-in-out;
    }

    @keyframes subtle-shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-2px); }
        75% { transform: translateX(2px); }
    }

    .hover-subtle-bounce:hover {
        animation: subtle-bounce 0.6s ease-in-out;
    }

    @keyframes subtle-bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-3px); }
    }

    .hover-gentle-tada:hover {
        animation: gentle-tada 0.8s ease-in-out;
    }

    @keyframes gentle-tada {
        0% { transform: scale(1); }
        30% { transform: scale(1.02) rotate(1deg); }
        60% { transform: scale(1.02) rotate(-1deg); }
        100% { transform: scale(1) rotate(0); }
    }

    .hover-soft-wiggle:hover {
        animation: soft-wiggle 0.6s ease-in-out;
    }

    @keyframes soft-wiggle {
        0%, 100% { transform: rotateZ(0); }
        25% { transform: rotateZ(-1deg); }
        75% { transform: rotateZ(1deg); }
    }

    /* Floating elements */
    .floating {
        animation: floating 4s ease-in-out infinite;
    }

    @keyframes floating {
        0% { transform: translate(0, 0px); }
        50% { transform: translate(0, -8px); }
        100% { transform: translate(0, 0px); }
    }

    /* Particle effect - DIKURANGI */
    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: #3b82f6;
        border-radius: 50%;
        animation: particle-float 8s ease-in-out infinite;
        opacity: 0.5;
    }

    @keyframes particle-float {
        0%, 100% { transform: translate(0, 0) rotate(0deg); opacity: 0.5; }
        25% { transform: translate(15px, -30px) rotate(90deg); opacity: 0.3; }
        50% { transform: translate(-10px, -60px) rotate(180deg); opacity: 0.5; }
        75% { transform: translate(20px, -30px) rotate(270deg); opacity: 0.3; }
    }

    /* Trophy icon animation - DIKURANGI */
    .trophy-glow {
        filter: drop-shadow(0 0 6px rgba(255, 215, 0, 0.5));
        animation: trophy-glow 3s ease-in-out infinite alternate;
    }

    @keyframes trophy-glow {
        from { filter: drop-shadow(0 0 6px rgba(255, 215, 0, 0.5)); }
        to { filter: drop-shadow(0 0 10px rgba(255, 215, 0, 0.3)); }
    }

    /* Counter animation */
    .counter {
        font-variant-numeric: tabular-nums;
    }

    /* Smooth transitions untuk semua elemen */
    * {
        transition: all 0.3s ease;
    }
    </style>
    <div class="bg-gray-50 font-sans text-gray-900 relative overflow-hidden">
        <!-- Floating particles background - DIKURANGI -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="particle" style="top:10%; left:5%; animation-delay: 0s;"></div>
            <div class="particle" style="top:20%; left:90%; animation-delay: 2s;"></div>
            <div class="particle" style="top:40%; left:15%; animation-delay: 4s;"></div>
        </div>

        <!-- Hero Section -->
        <section class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-10 relative z-10">
            <!-- Hero text & button -->
            <div class="flex flex-col justify-center space-y-6">
                <div class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('assets/trophy.png') }}" class="w-10 h-10 trophy-glow floating" alt="Trophy">
                    <h2 class="text-3xl font-bold leading-tight hover-scale">
                        SKARIGA, Sekolahnya <br />
                        Sang Juara! <br />
                        Gabung Skariga untuk <br />
                        Menjadi Sang Juara Selanjutnya!
                    </h2>
                </div>

                <button class="w-max bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition hover-lift hover-glow flex items-center gap-2"
                    onclick="alert('Daftar Sekarang clicked!')">
                    <span>Daftar Sekarang</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </button>
            </div>

            <!-- Hero images grid -->
            <div class="grid grid-cols-2 gap-4 relative">
                <!-- Floating badge -->
                <div class="absolute -top-4 -left-4 bg-yellow-400 text-yellow-900 px-3 py-1 rounded-full text-sm font-bold shadow-lg floating hover-scale z-20">
                    🏆 Juara Nasional
                </div>
                <!-- Kiri atas -->
                <img src="{{ asset('assets/skariga pres.jpeg') }}" class="rounded-lg shadow-md hover-scale hover-brightness" alt="Juara Seleksi Nasional 2024"/>

                <!-- Kanan (foto tinggi) -->
                <img src="{{ asset('assets/robot-manu.jpg') }}" class="rounded-lg shadow-md row-span-2 hover-scale hover-brightness hover-lift" alt="RMS"/>

                <!-- Kiri bawah -->
                <img src="{{ asset('assets/skariga prestasi.jpg') }}" class="rounded-lg shadow-md hover-scale hover-brightness" alt="Juara Car Painting"/>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="max-w-6xl mx-auto px-4 py-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl p-6 text-center shadow-md hover-lift">
                    <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
                    <div class="text-gray-600">Kejuaraan</div>
                </div>
                <div class="bg-white rounded-xl p-6 text-center shadow-md hover-lift">
                    <div class="text-3xl font-bold text-green-600 mb-2">100+</div>
                    <div class="text-gray-600">Siswa Berprestasi</div>
                </div>
                <div class="bg-white rounded-xl p-6 text-center shadow-md hover-lift">
                    <div class="text-3xl font-bold text-orange-600 mb-2">20+</div>
                    <div class="text-gray-600">Bidang Lomba</div>
                </div>
                <div class="bg-white rounded-xl p-6 text-center shadow-md hover-lift">
                    <div class="text-3xl font-bold text-purple-600 mb-2">10+</div>
                    <div class="text-gray-600">Tahun Berprestasi</div>
                </div>
            </div>
        </section>

        <!-- Para Jawara Section -->
        <div class="max-w-6xl mx-auto px-4 py-8">
            <!-- Container utama -->
            <div class="bg-white rounded-xl shadow-lg p-8 hover-lift relative">
                <!-- Floating trophy -->
                <img src="{{ asset('assets/trophy.png') }}" class="absolute -top-6 -right-6 w-16 h-16 trophy-glow floating" alt="Trophy">

                <!-- Header (titik + title) -->
                <div class="bg-gray-100 rounded-xl shadow-lg px-6 py-4 grid grid-cols-3 items-center hover-subtle-shake relative">
                    <!-- Titik di kiri -->
                    <div class="flex space-x-2">
                        <span class="w-4 h-4 rounded-full bg-red-500 hover-scale"></span>
                        <span class="w-4 h-4 rounded-full bg-yellow-500 hover-scale"></span>
                        <span class="w-4 h-4 rounded-full bg-green-500 hover-scale"></span>
                    </div>

                    <!-- Judul di tengah -->
                    <h2 class="text-2xl font-bold text-center hover-scale">PARA JAWARA!</h2>

                    <!-- Kolom kanan kosong biar judul tetap center -->
                    <div></div>
                </div>

                <!-- Isi juara - ANIMASI DIKURANGI -->
                <div class="space-y-8 mt-6">
                    <!-- Baris 1: 2 foto -->
                    <div class="grid grid-cols-2 gap-6 justify-center">
                        <div class="bg-white shadow-md rounded-lg p-4 hover-lift hover-border-blue hover-gentle-tada relative">
                            <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold hover-scale">
                                1
                            </div>
                            <img src="{{ asset('assets/robot-manu.jpg') }}" alt="Juara 1"
                                class="w-full h-48 object-cover rounded-lg mb-4 hover-scale hover-brightness">
                            <p class="font-semibold">Syahril Faisal Ramadani</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 LKS DikMen Jawa Timur ke 33, dibidang
                                Industrial Control</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg p-4 hover-lift hover-border-blue hover-soft-wiggle relative">
                            <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold hover-scale">
                                1
                            </div>
                            <img src="{{ asset('assets/electronics.png') }}" alt="Juara 2"
                                class="w-full h-48 object-cover rounded-lg mb-4 hover-scale hover-brightness">
                            <p class="font-semibold">Yohan Aldi Pratama</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang Electronics</p>
                        </div>
                    </div>

                    <!-- Baris 2: 3 foto -->
                    <div class="grid grid-cols-3 gap-6">
                        <div class="bg-white shadow-xl rounded-lg p-4 hover-lift hover-border-blue hover-gentle-tada relative">
                            <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold hover-scale">
                                1
                            </div>
                            <img src="{{ asset('assets/robot manufac.png') }}" alt="Juara 3"
                                class="w-full h-48 object-cover rounded-lg mb-4 hover-scale hover-brightness">
                            <p class="font-semibold">Azriel & Celvin</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang Robot Manufacturing System</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg p-4 hover-lift hover-border-blue hover-soft-wiggle relative">
                            <div class="absolute -top-2 -right-2 bg-yellow-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold hover-scale">
                                2
                            </div>
                            <img src="{{ asset('assets/webtechn.jpeg') }}" alt="Juara 4" class="w-full h-48 object-cover rounded-lg mb-4 hover-scale hover-brightness">
                            <p class="font-semibold">Arif Kurniawan</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 2 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang Web Technology</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg p-4 hover-lift hover-border-blue hover-gentle-tada relative">
                            <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold hover-scale">
                                1
                            </div>
                            <img src="{{ asset('assets/car paint.jpeg') }}" alt="Juara 5"
                                class="w-full h-48 object-cover rounded-lg mb-4 hover-scale hover-brightness">
                            <p class="font-semibold">Tegar Reyhan</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang Car Painting</p>
                        </div>
                    </div>

                    <!-- Baris 3: 2 foto -->
                    <div class="grid grid-cols-2 gap-6 justify-center">
                        <div class="bg-white shadow-md rounded-lg p-4 hover-lift hover-border-blue hover-soft-wiggle relative">
                            <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold hover-scale">
                                1
                            </div>
                            <img src="{{ asset('assets/uiux.jpg') }}" alt="Juara 6"
                                class="w-full h-48 object-cover rounded-lg mb-4 hover-scale hover-brightness">
                            <p class="font-semibold">Kayana Indrasta</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Sistem Informasi Festival 2024, dibidang
                                UI/UX Desain</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg p-4 hover-lift hover-border-blue hover-gentle-tada relative">
                            <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold hover-scale">
                                1
                            </div>
                            <img src="{{ asset('assets/it software.png') }}" alt="Juara 7"
                                class="w-full h-48 object-cover rounded-lg mb-4 hover-scale hover-brightness">
                            <p class="font-semibold">Edsel Param Mustapa</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang IT Software Solution For Business</p>
                        </div>
                    </div>

                    <!-- Baris 4: 3 foto -->
                    <div class="grid grid-cols-3 gap-6">
                        <div class="bg-white shadow-md rounded-lg p-4 hover-lift hover-border-blue hover-soft-wiggle relative">
                            <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold hover-scale">
                                1
                            </div>
                            <img src="{{ asset('assets/prototype model.png') }}" alt="Juara 8"
                                class="w-full h-48 object-cover rounded-lg mb-4 hover-scale hover-brightness">
                            <p class="font-semibold">Iza Aska </p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang Prototype Modeling</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg p-4 hover-lift hover-border-blue hover-gentle-tada relative">
                            <div class="absolute -top-2 -right-2 bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold hover-scale">
                                3
                            </div>
                            <img src="{{ asset('assets/marketing.jpeg') }}" alt="Juara 9"
                                class="w-full h-48 object-cover rounded-lg mb-4 hover-scale hover-brightness">
                            <p class="font-semibold">Ayu Dewi</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 3 Lomba Kompetensi Siswa Jawa Timur ke 32,
                                dibidang Marketing Online</p>
                        </div>
                        <div class="bg-white shadow-md rounded-lg p-4 hover-lift hover-border-blue hover-soft-wiggle relative">
                            <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold hover-scale">
                                1
                            </div>
                            <img src="{{ asset('assets/manufac system.jpg') }}" alt="Juara 10"
                                class="w-full h-48 object-cover rounded-lg mb-4 hover-scale hover-brightness">
                            <p class="font-semibold">Rafif & Novaldi</p>
                            <p class="text-sm text-gray-500">Pemenang Juara 1 LKS DIKMEN Jawa Timur 33, dibidang Robot
                                Manufacturing System</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script>
    window.addEventListener('DOMContentLoaded', () => {
        document.querySelector('header').classList.remove('bg-white', 'text-[#313131]', 'shadow-md');
    });

    window.addEventListener('scroll', () => {
        window.scrollY > 50 ? document.querySelector('header').classList.add('bg-white', 'text-[#313131]',
            'shadow-md') : document.querySelector('header').classList.remove('bg-white', 'text-[#313131]',
            'shadow-md');
    });

    setTimeout(() => {
        window.scrollTo(0, 0);
    }, 0);

    // Efek yang lebih halus
    document.addEventListener('DOMContentLoaded', function() {
        // Efek hover pada judul "PARA JAWARA!"
        const jawaraTitle = document.querySelector('h2.text-2xl');
        if (jawaraTitle) {
            jawaraTitle.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
            });

            jawaraTitle.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        }

        // Efek hover pada titik-titik
        const dots = document.querySelectorAll('.flex.space-x-2 span');
        dots.forEach(dot => {
            dot.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.2)';
            });

            dot.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    });
    </script>

</x-layout>
