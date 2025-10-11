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

        .qna-top3-container {
            flex-direction: column;
        }

        .top3-section {
            margin-top: 2rem;
        }
    }

    /* Styling untuk Top 3 Section */
    .top3-card {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        margin-bottom: 1rem;
        border-left: 4px solid;
    }

    .top3-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .top3-card.first {
        border-left-color: #FFD700;
        background: linear-gradient(to right, #fff8e1, white);
    }

    .top3-card.second {
        border-left-color: #C0C0C0;
        background: linear-gradient(to right, #f5f5f5, white);
    }

    .top3-card.third {
        border-left-color: #CD7F32;
        background: linear-gradient(to right, #f9f0e6, white);
    }

    .rank-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        font-weight: bold;
        margin-right: 10px;
    }

    .rank-badge.first {
        background-color: #FFD700;
        color: #333;
    }

    .rank-badge.second {
        background-color: #C0C0C0;
        color: #333;
    }

    .rank-badge.third {
        background-color: #CD7F32;
        color: white;
    }

    .click-count {
        font-size: 0.875rem;
        color: #6b7280;
        margin-top: 0.5rem;
    }

    .qna-top3-container {
        display: flex;
        gap: 2rem;
        margin-top: 2rem;
    }

    .qna-section, .top3-section {
        flex: 1;
    }

    .top3-section h2 {
        text-align: center;
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
        font-weight: bold;
        color: #1f2937;
    }
    </style>
    <div class="bg-white text-gray-900 font-sans">
        <div class="h-full h-max-content container mx-auto px-4 py-6">
            <!-- Hero Section -->
            <section class="relative h-[535px] mt-2 rounded-xl overflow-hidden">
                <div class="absolute inset-0 w-full h-full hover-scale">
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

            <!-- Q&A dan Top 3 Container -->
            <div class="qna-top3-container">
                <!-- Q&A Section (Setengah Lebar) -->
                <section class="qna-section bg-gray-100 rounded-xl p-6 shadow-2xl flex flex-col items-center justify-center min-h-auto transition-transform duration-300 hover:scale-105">
                    <!-- Header -->
                    <div class="bg-gray-200 rounded-xl shadow-lg px-6 py-4 grid grid-cols-3 items-center w-full">
                        <div class="flex space-x-2">
                            <span class="w-4 h-4 rounded-full bg-red-500 hover:scale-110 transition-transform"></span>
                            <span class="w-4 h-4 rounded-full bg-yellow-500 hover:scale-110 transition-transform"></span>
                            <span class="w-4 h-4 rounded-full bg-green-500 hover:scale-110 transition-transform"></span>
                        </div>
                        <h2 class="text-3xl font-extrabold text-center select-none">Q&amp;A</h2>
                        <div></div>
                    </div>

                    <!-- Chat Bubbles -->
                    <div class="space-y-4 w-full max-w-full mx-auto mt-8">
                        <!-- User 1 -->
                        <x-jurchat whois="USER">
                            Hai kak, aku mau nanya nih...
                        </x-jurchat>

                        <!-- Bot 1 -->
                        <x-jurchat whois="BOT">
                            Halo! Tentu, tanya aja ya. Jangan sungkan-sungkan, hehehe!
                        </x-jurchat>

                        <!-- User 2 -->
                        <x-jurchat whois="USER">
                            Nah, di SKARIGA ini jurusannya ada apa aja ya kak??
                        </x-jurchat>

                        <!-- Bot 2 -->
                        <x-jurchat whois="BOT">
                            Ada banyak jurusan di SKARIGA, yang terbagi menjadi 4 Departemen
                        </x-jurchat>

                        <x-jurchat whois="USER">
                            Wahhh, banyak banget, aku mau tau nih kakk
                        </x-jurchat>

                        <x-jurchat whois="BOT">
                            Pencet aja link dibawah ini
                        </x-jurchat>
                    </div>

                    <!-- Button Navigation -->
                    <div class="mt-10 flex flex-wrap justify-center gap-4">
                        <button data-target="elektro" class="btn-dept elektro-btn bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full transition shadow-md hover:scale-105 transition-transform hover:shadow-[0_0_15px_rgba(59,130,246,0.8)]">
                            ELEKTRO
                        </button>
                        <button data-target="otomotif" class="btn-dept otomotif-btn bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full transition shadow-md hover:scale-105 transition-transform hover:shadow-[0_0_15px_rgba(249,115,22,0.8)]">
                            OTOMOTIF
                        </button>
                        <button data-target="pemesinan" class="btn-dept pemesinan-btn bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full transition shadow-md hover:scale-105 transition-transform hover:shadow-[0_0_15px_rgba(59,130,246,0.8)]">
                            PEMESINAN
                        </button>
                        <button data-target="tik" class="btn-dept tik-btn bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full transition shadow-md hover:scale-105 transition-transform hover:shadow-[0_0_15px_rgba(249,115,22,0.8)]">
                            TIK
                        </button>
                    </div>
                </section>

                <!-- Top 3 Jurusan Section (Setengah Lebar) -->
                <section class="top3-section bg-gray-100 rounded-xl p-6 shadow-2xl min-h-auto">
                    <h2>TOP 2 DEPARTEMEN PALING SERING DIKEPOIN</h2>

                    <div id="top3-container">
                        <!-- Data akan diisi oleh JavaScript -->
                        <div class="top3-card first">
                            <div class="flex items-center">
                                <span class="rank-badge first">1</span>
                                <h3 class="text-xl font-bold" id="top1-name">-</h3>
                            </div>
                            <p class="click-count" id="top1-count">0 klik</p>
                        </div>

                        <div class="top3-card second">
                            <div class="flex items-center">
                                <span class="rank-badge second">2</span>
                                <h3 class="text-xl font-bold" id="top2-name">-</h3>
                            </div>
                            <p class="click-count" id="top2-count">0 klik</p>
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <p class="text-gray-600">Statistik ini menampilkan jurusan yang paling sering dikunjungi oleh pengunjung</p>
                        <div class="mt-4 p-3 bg-purple-50 rounded-lg">
                            <p class="text-sm text-purple-700">📊 <strong>Total Kunjungan:</strong> <span id="total-clicks">0</span> kali</p>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Departemen Sections -->

            <!-- ELEKTRO -->
            <section id="elektro" class="mt-16 max-w-full mx-auto">
                <h3 class="text-3xl font-bold mb-6 text-center">ELEKTRO</h3>
                <div class="slider-container overflow-x-auto">
                    <div class=" flex space-x-6 pb-4 slider snap-x snap-mandatory">
                        <!-- CARD 1 -->
                        <x-jurcard title="Teknik Elektronika & Audio Video" image="jurTEAV.jpg" departement="ELEKTRO">
                             Dengan kode jurusan AV, merupakan jurusan yang mempelajari perancangan, instalasi, dan
                            perawatan sistem elektronika
                            serta peralatan audio video. Lanjutan studi meliputi S1 Teknik Elektronika, Teknik
                            Elektro, atau pelatihan/sertifikasi teknisi AV. Berpotensi bekerja sebagai teknisi
                            elektronika,
                            teknisi audio video, instalator sistem, atau teknisi perawatan perangkat elektronik.

                        </x-jurcard>

                        <!-- CARD 2 -->
                        <x-jurcard title="Teknik Elektronika Industri" image="jurEI.jpg" departement="ELEKTRO">
                             Dengan kode jurusan EI, merupakan jurusan yang mempelajari perancangan, instalasi, dan
                        pemeliharaan sistem
                        elektronika pada bidang industri. Lanjutan studi meliputi S1 Teknik Elektronika atau
                        Teknik Elektro. Berpotensi bekerja sebagai teknisi industri,
                        perancang sistem kontrol, atau teknisi perawatan peralatan industri.

                        </x-jurcard>

                        <!-- CARD 3 -->
                        <x-jurcard title="Teknik Kimia Industri" image="jurKI.jpg" departement="ELEKTRO">
                           Dengan kode jurusan KL (Kimia Laboratorium), merupakan jurusan yang mempelajari
                        pengujian, analisis, dan pengolahan bahan kimia di laboratorium. Lanjutan studi meliputi
                        S1 Kimia, Farmasi, atau Teknik Kimia. Berpotensi bekerja sebagai analis laboratorium,
                        teknisi kimia, quality control, atau peneliti.

                        </x-jurcard>

                        <!-- CARD 4 -->
                        <x-jurcard title="Teknik Pembangkit Tenaga Listrik" image="jurPB.jpg" departement="ELEKTRO">
                            Dengan kode jurusan PB, merupakan jurusan yang mempelajari pengoperasian, pemeliharaan,
                        dan pengelolaan sistem pembangkit listrik. Lanjutan studi meliputi S1 Teknik Elektro
                        atau Energi Terbarukan. Berpotensi bekerja sebagai teknisi pembangkit, operator, atau
                        insinyur di bidang pembangkitan listrik.

                        </x-jurcard>
                    </div>
                </div>
            </section>

            <!-- OTOMOTIF -->
            <section id="otomotif" class="mt-16 max-w-full mx-auto">
                <h3 class="text-3xl font-bold mb-6 text-center">OTOMOTIF</h3>
                <div class="slider-container overflow-x-auto justify-center">
                    <div class=" flex space-x-6 pb-4 slider snap-x snap-mandatory justify-center">
                        <!-- CARD 1 -->
                        <x-jurcard title="Teknik Bisnis Sepeda Motor" image="jurTBSM.jpg" departement="OTOMOTIF">
                            Dengan kode jurusan TSM, merupakan jurusan yang mempelajari perawatan, perbaikan, dan
                        pengelolaan bisnis di bidang sepeda motor. Lanjutan studi meliputi S1 Teknik Otomotif
                        atau Manajemen Bisnis. Berpotensi bekerja sebagai teknisi sepeda motor, service advisor,
                        atau wirausahawan bengkel.

                        </x-jurcard>

                        <!-- CARD 2 -->
                        <x-jurcard title="Teknik Kendaraan Ringan" image="otomotif_card.png" departement="OTOMOTIF">
                             Dengan kode jurusan TKR, merupakan jurusan yang mempelajari perawatan, perbaikan, dan
                            diagnosis kerusakan kendaraan ringan. Lanjutan studi meliputi S1 Teknik Otomotif atau
                            Manufaktur. Berpotensi bekerja sebagai teknisi, mekanik, atau wirausahawan bengkel
                            kendaraan ringan.

                        </x-jurcard>

                        <!-- CARD 3 -->
                        <x-jurcard title="Teknik Body Otomotif" image="jurBO.jpg" departement="OTOMOTIF">
                            Dengan kode jurusan BO, merupakan jurusan yang mempelajari perbaikan, perawatan, dan
                            pengecatan body kendaraan. Lanjutan studi meliputi S1 Teknik Otomotif atau Rekayasa
                            Material. Berpotensi bekerja sebagai teknisi body repair, pengecat kendaraan, atau
                            wirausahawan bengkel body.

                        </x-jurcard>
                    </div>
                </div>
            </section>

            <!-- PEMESINAN -->
            <section id="pemesinan" class="mt-16 max-w-full mx-auto ">
                <h3 class="text-3xl font-bold mb-6 text-center">PEMESINAN</h3>
                <div class="slider-container overflow-x-auto justify-center">
                    <div class=" flex space-x-6 pb-4 slider snap-x snap-mandatory justify-center">
                        <!-- CARD 1 -->
                        <x-jurcard title="Bisnis Digital & Pemasaran" image="jurBDP.jpg" departement="PEMESINAN">
                              Dengan kode jurusan BDP, merupakan jurusan yang mempelajari pemasaran, penjualan, dan
                            pengelolaan bisnis. Lanjutan studi meliputi S1 Manajemen, Bisnis, atau Pemasaran.
                            Berpotensi bekerja sebagai staf pemasaran, sales, wirausahawan, atau manajer bisnis.

                        </x-jurcard>

                        <!-- CARD 2 -->
                        <x-jurcard title="Teknik Pengelasan" image="jurTL.jpg" departement="PEMESINAN">
                             Dengan kode jurusan TL, merupakan jurusan yang mempelajari teknik pengelasan dan
                            fabrikasi logam. Lanjutan studi meliputi S1 Teknik Mesin atau Metalurgi. Berpotensi
                            bekerja sebagai juru las, teknisi fabrikasi, atau inspektur pengelasan.

                        </x-jurcard>

                        <!-- CARD 3 -->
                        <x-jurcard title="Teknik Pemesinan" image="jurTP.jpg" departement="PEMESINAN">
                             Dengan kode jurusan TP, merupakan jurusan yang mempelajari proses permesinan, pembuatan,
                            dan perawatan komponen mesin. Lanjutan studi meliputi S1 Teknik Mesin atau Manufaktur.
                            Berpotensi bekerja sebagai teknisi mesin, operator CNC, atau perancang komponen mekanik.

                        </x-jurcard>
                    </div>
                </div>
            </section>

            <!-- TIK -->
            <section id="tik" class="mt-16 max-w-full mx-auto justify-center">
                <h3 class="text-3xl font-bold mb-6 text-center">TEKNOLOGI INFORMASI & KOMUNIKASI</h3>
                <div class="slider-container overflow-x-auto">
                    <div class=" flex space-x-6 pb-4 slider snap-x snap-mandatory">
                        <!-- CARD 1 -->
                        <x-jurcard title="Animasi" image="jurNIMA.jpg" departement="TIK">
                              Dengan kode jurusan NIM, merupakan jurusan yang mempelajari pembuatan animasi 2D dan 3D
                            untuk keperluan hiburan, pendidikan, maupun media komersial. Lanjutan studi meliputi S1
                            Animasi, Desain Komunikasi Visual, atau Perfilman. Berpotensi bekerja sebagai animator,
                            ilustrator, storyboard artist, atau desainer multimedia.

                        </x-jurcard>

                        <!-- CARD 2 -->
                        <x-jurcard title="Desain Komunikasi Visual" image="jurDKV.jpg" departement="TIK">
                           Dengan kode jurusan DKV, merupakan jurusan yang mempelajari desain komunikasi visual
                            untuk menyampaikan pesan melalui media cetak maupun digital. Lanjutan studi meliputi S1
                            Desain Komunikasi Visual atau bidang seni dan desain terkait. Berpotensi bekerja sebagai
                            desainer grafis, ilustrator, animator, fotografer, atau desainer multimedia.

                        </x-jurcard>

                        <!-- CARD 3 -->
                        <x-jurcard title="Broadcasting & Perfilman" image="jurBP.jpg" departement="TIK">
                             Dengan kode jurusan BP, merupakan jurusan yang mempelajari perencanaan,
                        produksi, dan penyiaran konten audio-visual untuk radio, televisi, dan media digital.
                        Lanjutan studi meliputi S1 Broadcasting, Ilmu Komunikasi, atau perfilman. Berpotensi
                        bekerja sebagai penyiar, reporter, kameramen, editor video, atau produser.

                        </x-jurcard>

                        <!-- CARD 4 -->
                        <x-jurcard title="Teknik Komputer Jaringan" image="jurTKJ.jpg" departement="TIK">
                            Dengan kode jurusan TKJ, merupakan jurusan yang mempelajari instalasi, konfigurasi, dan
                        pemeliharaan jaringan komputer. Lanjutan studi meliputi S1 Teknik Informatika, Teknik
                        Elektro, atau pelatihan/sertifikasi jaringan. Berpotensi bekerja sebagai teknisi,
                        administrator, atau konsultan jaringan, serta spesialis keamanan siber.

                        </x-jurcard>

                        <!-- CARD 5 -->
                        <x-jurcard title="Rekayasa Perangkat Lunak" image="jurRPL.jpg" departement="TIK">
                             Dengan kode jurusan RPL, merupakan jurusan yang mempelajari perancangan, pengembangan,
                        dan pemeliharaan perangkat lunak. Lanjutan studi meliputi S1 RPL, S1 Teknik Informatika,
                        atau pelatihan/sertifikasi IT. Berpotensi bekerja sebagai pengembang, insinyur, analis,
                        konsultan, manajer proyek, pengajar, atau peneliti perangkat lunak.

                        </x-jurcard>
                    </div>
                </div>
            </section>

            <!-- JavaScript -->
            <script>
            // Data untuk menyimpan jumlah klik pada setiap jurusan
            let clickStats = {
                elektro: 0,
                otomotif: 0,
                pemesinan: 0,
                tik: 0
            };

            // Fungsi untuk memuat statistik dari localStorage
            function loadStats() {
                const savedStats = localStorage.getItem('jurusanClickStats');
                if (savedStats) {
                    clickStats = JSON.parse(savedStats);
                }
                updateTop3Display();
                updateTotalClicks();
            }

            // Fungsi untuk menyimpan statistik ke localStorage
            function saveStats() {
                localStorage.setItem('jurusanClickStats', JSON.stringify(clickStats));
            }

            // Fungsi untuk update total klik
            function updateTotalClicks() {
                const total = Object.values(clickStats).reduce((sum, count) => sum + count, 0);
                document.getElementById('total-clicks').textContent = total;
            }

            // Fungsi untuk memperbarui tampilan Top 3
            function updateTop3Display() {
                // Mengubah objek menjadi array untuk diurutkan
                const statsArray = Object.entries(clickStats).map(([name, count]) => ({ name, count }));

                // Mengurutkan berdasarkan jumlah klik (descending)
                statsArray.sort((a, b) => b.count - a.count);

                // Mengambil 2 teratas (sesuai dengan judul "TOP 2")
                const top2 = statsArray.slice(0, 2);

                // Memperbarui tampilan
                const top1Name = document.getElementById('top1-name');
                const top1Count = document.getElementById('top1-count');
                const top2Name = document.getElementById('top2-name');
                const top2Count = document.getElementById('top2-count');

                // Format nama jurusan
                const formatJurusanName = (name) => {
                    const names = {
                        'elektro': 'ELEKTRO',
                        'otomotif': 'OTOMOTIF',
                        'pemesinan': 'PEMESINAN',
                        'tik': 'TIK'
                    };
                    return names[name] || name.toUpperCase();
                };

                // Update peringkat 1
                if (top2.length > 0) {
                    top1Name.textContent = formatJurusanName(top2[0].name);
                    top1Count.textContent = `${top2[0].count} klik`;
                } else {
                    top1Name.textContent = '-';
                    top1Count.textContent = '0 klik';
                }

                // Update peringkat 2
                if (top2.length > 1) {
                    top2Name.textContent = formatJurusanName(top2[1].name);
                    top2Count.textContent = `${top2[1].count} klik`;
                } else {
                    top2Name.textContent = '-';
                    top2Count.textContent = '0 klik';
                }
            }

            // Scroll to department section saat tombol ditekan
            document.querySelectorAll('.btn-dept').forEach(button => {
                button.addEventListener('click', () => {
                    const targetId = button.getAttribute('data-target');
                    const targetSection = document.getElementById(targetId);

                    // Meningkatkan jumlah klik untuk jurusan ini
                    if (clickStats.hasOwnProperty(targetId)) {
                        clickStats[targetId]++;
                        saveStats();
                        updateTop3Display();
                        updateTotalClicks();
                    }

                    if (targetSection) {
                        targetSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Fungsi untuk slider
            document.querySelectorAll('.slider-container').forEach(container => {
                const slider = container.querySelector('.slider');
                const prevBtn = container.querySelector('.prev-btn');
                const nextBtn = container.querySelector('.next-btn');

                // Hitung lebar kartu + gap
                const cardWidth = 300;
                const gap = 24;
                const scrollAmount = cardWidth + gap;

                // Event listener untuk tombol next
                if (nextBtn) {
                    nextBtn.addEventListener('click', () => {
                        slider.scrollBy({
                            left: scrollAmount,
                            behavior: 'smooth'
                        });
                    });
                }

                // Event listener untuk tombol previous
                if (prevBtn) {
                    prevBtn.addEventListener('click', () => {
                        slider.scrollBy({
                            left: -scrollAmount,
                            behavior: 'smooth'
                        });
                    });
                }
            });

            // Memuat statistik saat halaman dimuat
            document.addEventListener('DOMContentLoaded', loadStats);
            </script>

        </div>
    </div>
</x-layout>
