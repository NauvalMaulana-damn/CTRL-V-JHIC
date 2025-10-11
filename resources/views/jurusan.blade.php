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

        .chart-container {
            height: 250px !important;
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

    /* Styling untuk diagram lingkaran */
    .chart-container {
        position: relative;
        height: 300px;
        margin: 1rem 0;
    }

    .pie-chart-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
    }

    .chart-legend {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.5rem;
        margin-top: 1rem;
    }

    .legend-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.875rem;
    }

    .legend-color {
        width: 12px;
        height: 12px;
        border-radius: 50%;
    }

    .no-data-message {
        text-align: center;
        padding: 2rem;
        color: #6b7280;
        font-style: italic;
    }
    </style>

    <!-- Sertakan Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

                <!-- Top 3 Jurusan Section (Setengah Lebar) - DIUBAH -->
                <section class="top3-section bg-gray-100 rounded-xl p-6 shadow-2xl min-h-auto transition-transform duration-300 hover:scale-105">
                    <h2>STATISTIK KUNJUNGAN DEPARTEMEN</h2>

                    <div class="pie-chart-wrapper">
                        <div class="chart-container">
                            <canvas id="jurusanPieChart"></canvas>
                        </div>

                        <div class="chart-legend" id="chartLegend">
                            <!-- Legend akan diisi oleh JavaScript -->
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <p class="text-gray-600">Statistik ini menampilkan persentase kunjungan ke setiap departemen</p>
                        <div class="mt-4 p-3 bg-purple-50 rounded-lg">
                            <p class="text-sm text-purple-700">📊 <strong>Total Kunjungan:</strong> <span id="total-clicks">0</span> kali</p>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Departemen Sections (sama seperti sebelumnya) -->
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
                            Berpotensi bekerja sebagai teknisi mesin, operator CNC, atau perancang komponen mekanic.

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

            // Variabel untuk chart
            let jurusanChart = null;

            // Fungsi untuk memuat statistik dari localStorage
            function loadStats() {
                const savedStats = localStorage.getItem('jurusanClickStats');
                if (savedStats) {
                    clickStats = JSON.parse(savedStats);
                }
                updateChart();
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

            // Fungsi untuk membuat atau memperbarui diagram lingkaran
            function updateChart() {
                const ctx = document.getElementById('jurusanPieChart').getContext('2d');
                const totalClicks = Object.values(clickStats).reduce((sum, count) => sum + count, 0);

                // Format data untuk chart
                const labels = [];
                const data = [];
                const backgroundColors = [
                    'rgba(59, 130, 246, 0.8)',  // Biru untuk ELEKTRO
                    'rgba(249, 115, 22, 0.8)',  // Orange untuk OTOMOTIF
                    'rgba(16, 185, 129, 0.8)',  // Hijau untuk PEMESINAN
                    'rgba(139, 92, 246, 0.8)'   // Ungu untuk TIK
                ];
                const borderColors = [
                    'rgb(59, 130, 246)',
                    'rgb(249, 115, 22)',
                    'rgb(16, 185, 129)',
                    'rgb(139, 92, 246)'
                ];

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

                // Siapkan data untuk chart
                Object.entries(clickStats).forEach(([key, value], index) => {
                    labels.push(formatJurusanName(key));
                    data.push(value);
                });

                // Hancurkan chart sebelumnya jika ada
                if (jurusanChart) {
                    jurusanChart.destroy();
                }

                // Buat chart baru
                jurusanChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            data: data,
                            backgroundColor: backgroundColors,
                            borderColor: borderColors,
                            borderWidth: 2
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false // Kita akan buat custom legend
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        const label = context.label || '';
                                        const value = context.raw || 0;
                                        const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                        const percentage = total > 0 ? Math.round((value / total) * 100) : 0;
                                        return `${label}: ${value} (${percentage}%)`;
                                    }
                                }
                            }
                        }
                    }
                });

                // Update custom legend
                updateChartLegend(labels, data, backgroundColors, totalClicks);
            }

            // Fungsi untuk memperbarui legend chart
            function updateChartLegend(labels, data, colors, totalClicks) {
                const legendContainer = document.getElementById('chartLegend');
                legendContainer.innerHTML = '';

                if (totalClicks === 0) {
                    legendContainer.innerHTML = '<div class="no-data-message">Belum ada data kunjungan</div>';
                    return;
                }

                labels.forEach((label, index) => {
                    const value = data[index];
                    const percentage = totalClicks > 0 ? Math.round((value / totalClicks) * 100) : 0;

                    const legendItem = document.createElement('div');
                    legendItem.className = 'legend-item';

                    legendItem.innerHTML = `
                        <span class="legend-color" style="background-color: ${colors[index]}"></span>
                        <span>${label}: ${percentage}% (${value})</span>
                    `;

                    legendContainer.appendChild(legendItem);
                });
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
                        updateChart();
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
