<x-layout title="Prestasi - SMK PGRI 3 Malang">
    <style>
    /* Custom scrollbar untuk slider */
    .slider::-webkit-scrollbar {
        height: 8px;
    }

    .slider::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }

    .slider::-webkit-scrollbar-thumb {
        background: #3b82f6;
        border-radius: 4px;
    }

    /* Tambahan untuk slider yang lebih baik */
    .slider-container {
        position: relative;
    }

    .slider-nav {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-top: 1rem;
    }

    .slider-btn {
        background: #3b82f6;
        color: white;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.3s;
    }

    .slider-btn:hover {
        background: #2563eb;
    }

    .slider-btn:disabled {
        background: #9ca3af;
        cursor: not-allowed;
    }

    /* Efek hover untuk kartu jurusan */
    .jurusan-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .jurusan-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Responsif untuk mobile */
    @media (max-width: 768px) {
        .btn-dept {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }
    }
    </style>
    <div class="bg-white text-gray-900 font-sans">


        <!-- Hero Section -->
        <section class="relative h-80 md:h-96 bg-cover bg-center rounded-xl mx-4 md:mx-6 mt-6"
            style="background-image: url('https://images.unsplash.com/photo-1581091012184-1b6fdd48cb43?auto=format&fit=crop&w=1050&q=80')">
            <div class="absolute inset-0 bg-black bg-opacity-40 rounded-xl flex items-center px-8">
                <h1 class="text-4xl md:text-6xl font-bold text-white max-w-3xl">
                    TEMUKAN<br />POTENSIMU!
                </h1>
            </div>
        </section>

        <!-- Q&A Section -->
        <section
            class="bg-gray-100 rounded-xl p-6 mt-8 shadow-2xl max-w-5xl mx-auto flex flex-col items-center justify-center min-h-auto">
            <!-- Header -->
            <div
                class="bg-gray-200 rounded-xl shadow-lg px-6 py-4 grid grid-cols-3 items-center max-w-full mx-full w-full transition-transform duration-300 hover:scale-105">
                <div class="flex space-x-2">
                    <span class="w-4 h-4 rounded-full bg-red-500 hover:scale-110 transition-transform"></span>
                    <span class="w-4 h-4 rounded-full bg-yellow-500 hover:scale-110 transition-transform"></span>
                    <span class="w-4 h-4 rounded-full bg-green-500 hover:scale-110 transition-transform"></span>
                </div>
                <h2 class="text-2xl font-extrabold text-center select-none">Q&amp;A</h2>
                <div></div>
            </div>

            <!-- Chat Bubbles -->
            <div class="space-y-4 w-full max-w-full mx-auto mt-8">
                <!-- User 1 -->
                <div class="flex items-start space-x-3">
                    <div
                        class="flex-shrink-0 w-8 h-8 rounded-full border border-gray-700 flex items-center justify-center text-gray-700">
                        👤
                    </div>
                    <div class="bg-blue-600 text-white px-4 py-2 rounded-lg max-w-[85%]">
                        Kak jurusan yang ada di SKARIGA apa aja?
                    </div>
                </div>

                <!-- Bot 1 -->
                <div class="flex items-start justify-end space-x-3 max-w-full ml-auto">
                    <div class="bg-orange-500 text-white px-4 py-2 rounded-lg">
                        Ada lebih dari 10 jurusan! Yang bisa dibagi jadi 4 Departemen
                    </div>
                    <div
                        class="flex-shrink-0 w-8 h-8 rounded-full border border-gray-700 flex items-center justify-center text-gray-700">
                        👤
                    </div>
                </div>

                <!-- User 2 -->
                <div class="flex items-start space-x-3">
                    <div
                        class="flex-shrink-0 w-8 h-8 rounded-full border border-gray-700 flex items-center justify-center text-gray-700">
                        👤
                    </div>
                    <div class="bg-blue-600 text-white px-4 py-2 rounded-lg max-w-[85%]">
                        Buset! Mau liat dong
                    </div>
                </div>

                <!-- Bot 2 -->
                <div class="flex items-start justify-end space-x-3 max-w-full ml-auto">
                    <div class="bg-orange-500 text-white px-4 py-2 rounded-lg cursor-pointer select-none hover:scale-105 transition-transform"
                        id="btnPencet">
                        Pencet aja!
                    </div>
                    <div
                        class="flex-shrink-0 w-8 h-8 rounded-full border border-gray-700 flex items-center justify-center text-gray-700">
                        👤
                    </div>
                </div>
            </div>

            <!-- Button Navigation -->
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <button data-target="elektro"
                    class="btn-dept bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full transition">
                    ELEKTRO
                </button>
                <button data-target="otomotif"
                    class="btn-dept bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full transition">
                    OTOMOTIF
                </button>
                <button data-target="pemesinan"
                    class="btn-dept bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full transition">
                    PEMESINAN
                </button>
                <button data-target="tik"
                    class="btn-dept bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full transition">
                    TIK
                </button>
            </div>
        </section>



        <!-- Departemen Sections -->

        <!-- ELEKTRO -->
        <section id="elektro" class="mt-16 max-w-7xl mx-auto px-4 md:px-6">
            <h3 class="text-3xl font-bold mb-6 text-center">ELEKTRO</h3>
            <div class="slider-container">
                <div class="overflow-x-auto flex space-x-6 pb-4 slider snap-x snap-mandatory">
                    <div class="min-w-[300px] shrink-0 bg-white rounded-lg shadow p-4 snap-start">
                        <img src="https://images.unsplash.com/photo-1607082341738-6c30e29f92d8?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover rounded mb-2" />
                        <h4 class="font-semibold mb-1">Teknik Elektronika & Audio Video</h4>
                        <p class="text-sm text-gray-700">Jurusan AV ...</p>
                    </div>
                    <div class="min-w-[300px] shrink-0 bg-white rounded-lg shadow p-4 snap-start">
                        <img src="https://images.unsplash.com/photo-1596495577886-d920f1e0eee7?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover rounded mb-2" />
                        <h4 class="font-semibold mb-1">Teknik Elektronika Industri</h4>
                        <p class="text-sm text-gray-700">Jurusan EI ...</p>
                    </div>
                    <div class="min-w-[300px] shrink-0 bg-white rounded-lg shadow p-4 snap-start">
                        <img src="https://images.unsplash.com/photo-1581090700227-ba320415b4d1?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover rounded mb-2" />
                        <h4 class="font-semibold mb-1">Teknik Kimia Industri</h4>
                        <p class="text-sm text-gray-700">Jurusan KI ...</p>
                    </div>
                    <div class="min-w-[300px] shrink-0 bg-white rounded-lg shadow p-4 snap-start">
                        <img src="https://images.unsplash.com/photo-1581090700227-ba320415b4d1?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover rounded mb-2" />
                        <h4 class="font-semibold mb-1">Teknik Kimia Industri</h4>
                        <p class="text-sm text-gray-700">Jurusan KI ...</p>
                    </div>
                    <div class="min-w-[300px] shrink-0 bg-white rounded-lg shadow p-4 snap-start">
                        <img src="https://images.unsplash.com/photo-1581090700227-ba320415b4d1?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover rounded mb-2" />
                        <h4 class="font-semibold mb-1">Teknik Kimia Industri</h4>
                        <p class="text-sm text-gray-700">Jurusan KI ...</p>
                    </div>
                    <div class="min-w-[300px] shrink-0 bg-white rounded-lg shadow p-4 snap-start">
                        <img src="https://images.unsplash.com/photo-1581090700227-ba320415b4d1?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover rounded mb-2" />
                        <h4 class="font-semibold mb-1">Teknik Kimia Industri</h4>
                        <p class="text-sm text-gray-700">Jurusan KI ...</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- OTOMOTIF -->
        <section id="otomotif" class="mt-20 max-w-7xl mx-auto px-4 md:px-6">
            <h3 class="text-3xl font-bold mb-6 text-center">OTOMOTIF</h3>
            <div class="slider-container">
                <div
                    class="slider flex space-x-6 overflow-x-auto pb-4 scrollbar-thumb-blue-500 scrollbar-track-gray-200">
                    <div class="min-w-[300px] bg-white rounded-lg shadow p-4 shrink-0 jurusan-card">
                        <img src="https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?auto=format&fit=crop&w=400&q=80"
                            alt="Teknik Bisnis Sepedah Motor" class="rounded mb-2 h-40 w-full object-cover" />
                        <h4 class="font-semibold mb-1">Teknik Bisnis Sepedah Motor</h4>
                        <p class="text-sm text-gray-700">Jurusan TSM mempelajari perbaikan, penjualan bisnis sepedah
                            motor...</p>
                    </div>

                    <div class="min-w-[300px] bg-white rounded-lg shadow p-4 shrink-0 jurusan-card">
                        <img src="https://images.unsplash.com/photo-1519838262952-6a95d8a18c7d?auto=format&fit=crop&w=400&q=80"
                            alt="Teknik Kendaraan Ringan" class="rounded mb-2 h-40 w-full object-cover" />
                        <h4 class="font-semibold mb-1">Teknik Kendaraan Ringan</h4>
                        <p class="text-sm text-gray-700">Jurusan TKR, mempelajari perawatan kendaraan ringan dan
                            mekanik...</p>
                    </div>

                    <div class="min-w-[300px] bg-white rounded-lg shadow p-4 shrink-0 jurusan-card">
                        <img src="https://images.unsplash.com/photo-1562079337-529deee94394?auto=format&fit=crop&w=400&q=80"
                            alt="Teknik Perbaikan Body Otomotif" class="rounded mb-2 h-40 w-full object-cover" />
                        <h4 class="font-semibold mb-1">Teknik Perbaikan Body Otomotif</h4>
                        <p class="text-sm text-gray-700">Jurusan BPO mempelajari perbaikan body dan pengecatan
                            kendaraan...</p>
                    </div>

                    <!-- Tambahan kartu untuk demo slider -->
                    <div class="min-w-[300px] bg-white rounded-lg shadow p-4 shrink-0 jurusan-card">
                        <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=400&q=80"
                            alt="Teknik Ototronik" class="rounded mb-2 h-40 w-full object-cover" />
                        <h4 class="font-semibold mb-1">Teknik Ototronik</h4>
                        <p class="text-sm text-gray-700">Jurusan ototronik, mempelajari sistem elektronik pada kendaraan
                            modern...</p>
                    </div>
                </div>
                <div class="slider-nav">
                    <button class="slider-btn prev-btn" data-slider="otomotif">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button class="slider-btn next-btn" data-slider="otomotif">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- PEMESINAN -->
        <section id="pemesinan" class="mt-20 max-w-7xl mx-auto px-4 md:px-6">
            <h3 class="text-3xl font-bold mb-6 text-center">PEMESINAN</h3>
            <div class="slider-container">
                <div
                    class="slider flex space-x-6 overflow-x-auto pb-4 scrollbar-thumb-blue-500 scrollbar-track-gray-200">
                    <div class="min-w-[300px] bg-white rounded-lg shadow p-4 shrink-0 jurusan-card">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=400&q=80"
                            alt="Bisnis Digital & Pemasaran" class="rounded mb-2 h-40 w-full object-cover" />
                        <h4 class="font-semibold mb-1">Bisnis Digital & Pemasaran</h4>
                        <p class="text-sm text-gray-700">Jurusan BDP mempelajari pemasaran elektronik dan bisnis
                            digital...</p>
                    </div>

                    <div class="min-w-[300px] bg-white rounded-lg shadow p-4 shrink-0 jurusan-card">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&q=80"
                            alt="Teknik Pengelasan" class="rounded mb-2 h-40 w-full object-cover" />
                        <h4 class="font-semibold mb-1">Teknik Pengelasan</h4>
                        <p class="text-sm text-gray-700">Jurusan TL mempelajari teknik pengelasan logam...</p>
                    </div>

                    <div class="min-w-[300px] bg-white rounded-lg shadow p-4 shrink-0 jurusan-card">
                        <img src="https://images.unsplash.com/photo-1581093588401-9a4a4950bc34?auto=format&fit=crop&w=400&q=80"
                            alt="Teknik Pemesinan" class="rounded mb-2 h-40 w-full object-cover" />
                        <h4 class="font-semibold mb-1">Teknik Pemesinan</h4>
                        <p class="text-sm text-gray-700">Jurusan TM mempelajari proses pembuatan mesin dan
                            komponennya...</p>
                    </div>

                    <!-- Tambahan kartu untuk demo slider -->
                    <div class="min-w-[300px] bg-white rounded-lg shadow p-4 shrink-0 jurusan-card">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=400&q=80"
                            alt="Teknik Fabrikasi Logam" class="rounded mb-2 h-40 w-full object-cover" />
                        <h4 class="font-semibold mb-1">Teknik Fabrikasi Logam</h4>
                        <p class="text-sm text-gray-700">Jurusan fabrikasi, mempelajari pembuatan struktur logam dan
                            komponen...</p>
                    </div>
                </div>
                <div class="slider-nav">
                    <button class="slider-btn prev-btn" data-slider="pemesinan">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button class="slider-btn next-btn" data-slider="pemesinan">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- TIK -->
        <section id="tik" class="mt-20 max-w-7xl mx-auto px-4 md:px-6 mb-16">
            <h3 class="text-3xl font-bold mb-6 text-center">TEKNOLOGI INFORMASI & KOMUNIKASI</h3>
            <div class="slider-container">
                <div
                    class="slider flex space-x-6 overflow-x-auto pb-4 scrollbar-thumb-blue-500 scrollbar-track-gray-200">
                    <div class="min-w-[300px] bg-white rounded-lg shadow p-4 shrink-0 jurusan-card">
                        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=400&q=80"
                            alt="Animasi" class="rounded mb-2 h-40 w-full object-cover" />
                        <h4 class="font-semibold mb-1 text-purple-600">Animasi</h4>
                        <p class="text-sm text-gray-700">Jurusan NIM mempelajari animasi, ilustrator, storyboard, dsb.
                        </p>
                    </div>

                    <div class="min-w-[300px] bg-white rounded-lg shadow p-4 shrink-0 jurusan-card">
                        <img src="https://images.unsplash.com/photo-1508672019048-805c876b67e2?auto=format&fit=crop&w=400&q=80"
                            alt="Desain Komunikasi Visual" class="rounded mb-2 h-40 w-full object-cover" />
                        <h4 class="font-semibold mb-1 text-purple-600">Desain Komunikasi Visual</h4>
                        <p class="text-sm text-gray-700">Jurusan DKV mempelajari desain grafis, ilustrasi, dsb.</p>
                    </div>

                    <div class="min-w-[300px] bg-white rounded-lg shadow p-4 shrink-0 jurusan-card">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=400&q=80"
                            alt="Broadcasting & Perfilman" class="rounded mb-2 h-40 w-full object-cover" />
                        <h4 class="font-semibold mb-1 text-purple-600">Broadcasting & Perfilman</h4>
                        <p class="text-sm text-gray-700">Jurusan Broadcasting mempelajari produksi media dan
                            perfilman...</p>
                    </div>

                    <!-- Tambahan kartu untuk demo slider -->
                    <div class="min-w-[300px] bg-white rounded-lg shadow p-4 shrink-0 jurusan-card">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=400&q=80"
                            alt="Rekayasa Perangkat Lunak" class="rounded mb-2 h-40 w-full object-cover" />
                        <h4 class="font-semibold mb-1 text-purple-600">Rekayasa Perangkat Lunak</h4>
                        <p class="text-sm text-gray-700">Jurusan RPL mempelajari pengembangan aplikasi dan software...
                        </p>
                    </div>
                </div>
                <div class="slider-nav">
                    <button class="slider-btn prev-btn" data-slider="tik">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button class="slider-btn next-btn" data-slider="tik">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- JavaScript -->
        <script>
        // Scroll to department section saat tombol ditekan
        document.querySelectorAll('.btn-dept').forEach(button => {
            button.addEventListener('click', () => {
                const targetId = button.getAttribute('data-target');
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Tombol "Pencet aja" arahkan ke ELEKTRO sebagai contoh
        document.getElementById('btnPencet').addEventListener('click', () => {
            const targetSection = document.getElementById('elektro');
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });

        // Fungsi untuk slider
        document.querySelectorAll('.slider-container').forEach(container => {
            const slider = container.querySelector('.slider');
            const prevBtn = container.querySelector('.prev-btn');
            const nextBtn = container.querySelector('.next-btn');

            // Hitung lebar kartu + gap
            const cardWidth = 300; // min-w-[300px]
            const gap = 24; // space-x-6 = 1.5rem = 24px
            const scrollAmount = cardWidth + gap;

            // Event listener untuk tombol next
            nextBtn.addEventListener('click', () => {
                slider.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            });

            // Event listener untuk tombol previous
            prevBtn.addEventListener('click', () => {
                slider.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            });
        });
        </script>

    </div>
</x-layout>
