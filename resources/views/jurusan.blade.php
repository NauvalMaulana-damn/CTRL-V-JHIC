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
        <section class="relative  h-[535px] mt-2 mx-2 md:mx-10  rounded-xl overflow-hidden">
            <div class="absolute inset-0 w-full h-full hover-scale">
                {{-- <div class="absolute inset-0 bg-gradient-to-t from-transparent via-black/5 to-black/70"></div> --}}
                <img src="{{ asset('assets/jurusan.png') }}" alt="Hero SKARIGA" class="w-full h-full object-cover ">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
            </div>
            <div class="absolute bottom-8 left-3.5 md:left-10 z-10">
                <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-lg hover-scale">
                    TEMUKAN
                </h1>
                <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-lg hover-scale">
                    POTENSIMU!
                </h1>
            </div>
        </section>

        <!-- Q&A Section -->
        <section
            class="bg-gray-100 rounded-xl p-6 mt-8 shadow-2xl max-w-7xl mx-auto flex flex-col items-center justify-center min-h-auto transition-transform duration-300 hover:scale-105">
            <!-- Header -->
            <div
                class="bg-gray-200 rounded-xl shadow-lg px-6 py-4 grid grid-cols-3 items-center max-w-full mx-full w-full ">
                <div class="flex space-x-2">
                    <span class="w-4 h-4 rounded-full bg-red-500 hover:scale-110 transition-transform"></span>
                    <span class="w-4 h-4 rounded-full bg-yellow-500 hover:scale-110 transition-transform"></span>
                    <span class="w-4 h-4 rounded-full bg-green-500 hover:scale-110 transition-transform"></span>
                </div>
                <h2 class="text-5xl font-extrabold text-center select-none">Q&amp;A</h2>
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
                    <div
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg max-w-[85%] select-none hover:scale-105 transition-transform">
                        Kak jurusan yang ada di SKARIGA apa aja?
                    </div>
                </div>

                <!-- Bot 1 -->
                <div class="flex items-start justify-end space-x-3 max-w-full ml-auto">
                    <div
                        class="bg-orange-500 text-white px-4 py-2 rounded-lg select-none hover:scale-105 transition-transform">
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
                    <div
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg max-w-[85%] cursor-pointer select-none hover:scale-105 transition-transform">
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
                    class="btn-dept bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full transition shadow-md hover:scale-105 transition-transform hover:shadow-[0_0_15px_rgba(59,130,246,0.8)]">
                    ELEKTRO
                </button>
                <button data-target="otomotif"
                    class="btn-dept bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full transition shadow-md hover:scale-105 transition-transform hover:shadow-[0_0_15px_rgba(249,115,22,0.8)]">
                    OTOMOTIF
                </button>
                <button data-target="pemesinan"
                    class="btn-dept bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full transition shadow-md hover:scale-105 transition-transform hover:shadow-[0_0_15px_rgba(59,130,246,0.8)]">
                    PEMESINAN
                </button>
                <button data-target="tik"
                    class="btn-dept bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full transition shadow-md hover:scale-105 transition-transform hover:shadow-[0_0_15px_rgba(249,115,22,0.8)]">
                    TIK
                </button>
            </div>
        </section>



        <!-- Departemen Sections -->

        <!-- ELEKTRO -->
        <section id="elektro" class="mt-16 max-w-4x1 mx-auto px-4 md:px-6">
            <h3 class="text-3xl font-bold mb-6 text-center">ELEKTRO</h3>
            <div class="slider-container overflow-x-auto">
                <div class=" flex space-x-6 pb-4 slider snap-x snap-mandatory">

                    <!-- CARD 1 -->
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="{{ asset('assets/jurTEAV.jpg') }}" alt="Teknik Elektronika dan Audio Video"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Teknik Elektronika &amp; Audio Video</h4>
                            <div class="w-full h-2 bg-yellow-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan AV, merupakan jurusan yang mempelajari perancangan, instalasi, dan
                                perawatan sistem elektronika
                                serta peralatan audio video. Lanjutan studi meliputi S1 Teknik Elektronika, Teknik
                                Elektro, atau pelatihan/sertifikasi teknisi AV. Berpotensi bekerja sebagai teknisi
                                elektronika,
                                teknisi audio video, instalator sistem, atau teknisi perawatan perangkat elektronik.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div
                        class="w-[400px] h-[390px] pb-5 shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1596495577886-d920f1e0eee7?auto=format&fit=crop&w=400&q=80" alt="Teknik Elektronika Industri"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Teknik Elektronika Industri</h4>
                            <div class="w-full h-2 bg-yellow-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan EI, merupakan jurusan yang mempelajari perancangan, instalasi, dan
                                pemeliharaan sistem
                                elektronika pada bidang industri. Lanjutan studi meliputi S1 Teknik Elektronika atau
                                Teknik Elektro. Berpotensi bekerja sebagai teknisi industri,
                                perancang sistem kontrol, atau teknisi perawatan peralatan industri. </p>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1581090700227-ba320415b4d1?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Teknik Kimia Industri</h4>
                            <div class="w-full h-2 bg-yellow-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan KL (Kimia Laboratorium), merupakan jurusan yang mempelajari
                                pengujian, analisis, dan pengolahan bahan kimia di laboratorium. Lanjutan studi meliputi
                                S1 Kimia, Farmasi, atau Teknik Kimia. Berpotensi bekerja sebagai analis laboratorium,
                                teknisi kimia, quality control, atau peneliti. </p>
                        </div>
                    </div>
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1581090700227-ba320415b4d1?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Teknik Pembangkit Tenaga Listrik</h4>
                            <div class="w-full h-2 bg-yellow-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan PB, merupakan jurusan yang mempelajari pengoperasian, pemeliharaan,
                                dan pengelolaan sistem pembangkit listrik. Lanjutan studi meliputi S1 Teknik Elektro
                                atau Energi Terbarukan. Berpotensi bekerja sebagai teknisi pembangkit, operator, atau
                                insinyur di bidang pembangkitan listrik. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- OTOMOTIF -->
        <section id="elektro" class="mt-16 max-w-4x1 mx-auto px-4 md:px-6">
            <h3 class="text-3xl font-bold mb-6 text-center">OTOMOTIF</h3>
            <div class="slider-container overflow-x-auto">
                <div class=" flex space-x-6 pb-4 slider snap-x snap-mandatory">

                    <!-- CARD 1 -->
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1607082341738-6c30e29f92d8?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Teknik Bisnis Sepedah Motor</h4>
                            <div class="w-full h-2 bg-gray-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan TSM, merupakan jurusan yang mempelajari perawatan, perbaikan, dan
                                pengelolaan bisnis di bidang sepeda motor. Lanjutan studi meliputi S1 Teknik Otomotif
                                atau Manajemen Bisnis. Berpotensi bekerja sebagai teknisi sepeda motor, service advisor,
                                atau wirausahawan bengkel.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div
                        class="w-[400px] h-[390px] pb-5 shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="{{ asset('assets/otomotif_card.png') }}" alt="Teknik Kendaraan Ringan"
                            class="h-40 w-full object-cover" style="object-position: 50% -100px;" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Teknik Kendaraan Ringan</h4>
                            <div class="w-full h-2 bg-gray-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan TKR, merupakan jurusan yang mempelajari perawatan, perbaikan, dan
                                diagnosis kerusakan kendaraan ringan. Lanjutan studi meliputi S1 Teknik Otomotif atau
                                Manufaktur. Berpotensi bekerja sebagai teknisi, mekanik, atau wirausahawan bengkel
                                kendaraan ringan.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1581090700227-ba320415b4d1?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Teknik Perbaikan Body Otomotif</h4>
                            <div class="w-full h-2 bg-gray-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan BO, merupakan jurusan yang mempelajari perbaikan, perawatan, dan
                                pengecatan body kendaraan. Lanjutan studi meliputi S1 Teknik Otomotif atau Rekayasa
                                Material. Berpotensi bekerja sebagai teknisi body repair, pengecat kendaraan, atau
                                wirausahawan bengkel body.</p>
                        </div>
                    </div>
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1581090700227-ba320415b4d1?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Teknik Pembangkit Tenaga Listrik</h4>
                            <div class="w-full h-2 bg-gray-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan PB, merupakan jurusan yang mempelajari pengoperasian, pemeliharaan,
                                dan pengelolaan sistem pembangkit listrik. Lanjutan studi meliputi S1 Teknik Elektro
                                atau Energi Terbarukan. Berpotensi bekerja sebagai teknisi pembangkit, operator, atau
                                insinyur di bidang pembangkitan listrik. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PEMESINAN -->
        <section id="elektro" class="mt-16 max-w-4x1 mx-auto px-4 md:px-6">
            <h3 class="text-3xl font-bold mb-6 text-center">PEMESINAN</h3>
            <div class="slider-container overflow-x-auto">
                <div class=" flex space-x-6 pb-4 slider snap-x snap-mandatory">

                    <!-- CARD 1 -->
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1607082341738-6c30e29f92d8?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Teknik Elektronika &amp; Audio Video</h4>
                            <div class="w-full h-2 bg-red-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan AV, merupakan jurusan yang mempelajari perancangan, instalasi, dan
                                perawatan sistem elektronika
                                serta peralatan audio video. Lanjutan studi meliputi S1 Teknik Elektronika, Teknik
                                Elektro, atau pelatihan/sertifikasi teknisi AV. Berpotensi bekerja sebagai teknisi
                                elektronika,
                                teknisi audio video, instalator sistem, atau teknisi perawatan perangkat elektronik.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div
                        class="w-[400px] h-[390px] pb-5 shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1596495577886-d920f1e0eee7?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Bisnis Digital & Pemasaran</h4>
                            <div class="w-full h-2 bg-red-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan BDP, merupakan jurusan yang mempelajari pemasaran, penjualan, dan
                                pengelolaan bisnis. Lanjutan studi meliputi S1 Manajemen, Bisnis, atau Pemasaran.
                                Berpotensi bekerja sebagai staf pemasaran, sales, wirausahawan, atau manajer bisni </p>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1581090700227-ba320415b4d1?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Teknik Pengelasan</h4>
                            <div class="w-full h-2 bg-red-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan TL, merupakan jurusan yang mempelajari teknik pengelasan dan
                                fabrikasi logam. Lanjutan studi meliputi S1 Teknik Mesin atau Metalurgi. Berpotensi
                                bekerja sebagai juru las, teknisi fabrikasi, atau inspektur pengelasan.</p>
                        </div>
                    </div>
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="{{ asset('assets/pemesinan_card.jpg') }}" alt="Teknik Pemesinan"
                            class="h-40 w-full object-cover" style="object-position: 50% -50px;" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Teknik Pemesinan</h4>
                            <div class="w-full h-2 bg-red-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan TP, merupakan jurusan yang mempelajari proses permesinan, pembuatan,
                                dan perawatan komponen mesin. Lanjutan studi meliputi S1 Teknik Mesin atau Manufaktur.
                                Berpotensi bekerja sebagai teknisi mesin, operator CNC, atau perancang komponen mekanik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TIK -->
        <section id="elektro" class="mt-16 max-w-4x1 mx-auto px-4 md:px-6">
            <h3 class="text-3xl font-bold mb-6 text-center">TEKNOLOGI INFORMASI & KOMUNIKASI</h3>
            <div class="slider-container overflow-x-auto">
                <div class=" flex space-x-6 pb-4 slider snap-x snap-mandatory">

                    <!-- CARD 1 -->
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1607082341738-6c30e29f92d8?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Animasi</h4>
                            <div class="w-full h-2 bg-purple-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan NIM, merupakan jurusan yang mempelajari pembuatan animasi 2D dan 3D
                                untuk keperluan hiburan, pendidikan, maupun media komersial. Lanjutan studi meliputi S1
                                Animasi, Desain Komunikasi Visual, atau Perfilman. Berpotensi bekerja sebagai animator,
                                ilustrator, storyboard artist, atau desainer multimedia.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div
                        class="w-[400px] h-[390px] pb-5 shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1596495577886-d920f1e0eee7?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Desain Komunikasi Visual</h4>
                            <div class="w-full h-2 bg-purple-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan DKV, merupakan jurusan yang mempelajari desain komunikasi visual
                                untuk menyampaikan pesan melalui media cetak maupun digital. Lanjutan studi meliputi S1
                                Desain Komunikasi Visual atau bidang seni dan desain terkait. Berpotensi bekerja sebagai
                                desainer grafis, ilustrator, animator, fotografer, atau desainer multimedia. </p>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1581090700227-ba320415b4d1?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Teknik Kimia Industri</h4>
                            <div class="w-full h-2 bg-purple-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan KL (Kimia Laboratorium), merupakan jurusan yang mempelajari
                                pengujian, analisis, dan pengolahan bahan kimia di laboratorium. Lanjutan studi meliputi
                                S1 Kimia, Farmasi, atau Teknik Kimia. Berpotensi bekerja sebagai analis laboratorium,
                                teknisi kimia, quality control, atau peneliti. </p>
                        </div>
                    </div>
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1581090700227-ba320415b4d1?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Broadcasting & Perfilman</h4>
                            <div class="w-full h-2 bg-purple-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan Broadcasting, merupakan jurusan yang mempelajari perencanaan,
                                produksi, dan penyiaran konten audio-visual untuk radio, televisi, dan media digital.
                                Lanjutan studi meliputi S1 Broadcasting, Ilmu Komunikasi, atau perfilman. Berpotensi
                                bekerja sebagai penyiar, reporter, kameramen, editor video, atau produser. </p>

                            </div>
                    </div>
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1581090700227-ba320415b4d1?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Teknik Komputer Jaringan</h4>
                            <div class="w-full h-2 bg-purple-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan TKJ, merupakan jurusan yang mempelajari instalasi, konfigurasi, dan
                                pemeliharaan jaringan komputer. Lanjutan studi meliputi S1 Teknik Informatika, Teknik
                                Elektro, atau pelatihan/sertifikasi jaringan. Berpotensi bekerja sebagai teknisi,
                                administrator, atau konsultan jaringan, serta spesialis keamanan siber.</p>
                        </div>
                    </div>
                    <div
                        class="w-[400px] h-[390px] shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
                        <img src="https://images.unsplash.com/photo-1581090700227-ba320415b4d1?auto=format&fit=crop&w=400&q=80"
                            class="h-40 w-full object-cover" />
                        <div class="p-4">
                            <h4 class="font-bold text-lg mb-1">Rekayasa Perangkat Lunak</h4>
                            <div class="w-full h-2 bg-purple-400 mb-2"></div>
                            <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                Dengan kode jurusan RPL, merupakan jurusan yang mempelajari perancangan, pengembangan,
                                dan pemeliharaan perangkat lunak. Lanjutan studi meliputi S1 RPL, S1 Teknik Informatika,
                                atau pelatihan/sertifikasi IT. Berpotensi bekerja sebagai pengembang, insinyur, analis,
                                konsultan, manajer proyek, pengajar, atau peneliti perangkat lunak.
                            </p>
                            </div>
                    </div>
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
