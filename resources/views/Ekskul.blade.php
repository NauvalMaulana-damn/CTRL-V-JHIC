<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan Ekstrakurikuler</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: #F8F8F8;
        margin: 0;
        padding: 40px;
    }

    h1 {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 40px;
        color: #333;
    }

    .container {
        max-width: 1200px;
        /* biar nggak terlalu lebar di layar gede */
        margin: 0 auto;
        /* bikin konten ke tengah */
        padding-left: 16px;
        /* jarak kiri */
        padding-right: 16px;
        /* jarak kanan */
    }


    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        /* selalu 3 kolom */
        gap: 24px;
    }

    .card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: transform 0.2s ease;
    }

    .card:hover {
        transform: translateY(-6px);
    }

    .card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .card-content {
        padding: 16px;
        flex: 1;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 8px;
        color: #222;
    }

    .card-desc {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.4;
    }
    </style>
</head>

<body>

    <x-back2top></x-back2top>

    <x-header></x-header>

    <!-- Hero -->
    <section class="relative w-full max-w-[1920px] h-[800px] rounded-xl overflow-hidden m-6 mx-auto">
        <img src="https://placehold.co/1920x800" alt="Hero Image" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/20"></div>
    </section>

    <!-- Alumni Section -->
    <section class="py-12 md:py-16 animate-fade-in">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-12">Ekstrakurikuler</h2>

            <div class="container">
                <div class="grid">
                    <div class="card">
                        <img src="{{ asset("assets/eksFutsal.png") }}" alt="Futsal">
                        <div class="card-content">
                            <div class="card-title">Futsal</div>
                            <div class="card-desc">
                                Akademi Futsal Skariga (AFUSKA) merupakan ekskul bidang olahraga futsal
                                yang bisa diikuti oleh seluruh siswa Skariga. Terdiri dari tim putra dan putri.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksSepakbola.png") }}" alt="Sepakbola">
                        <div class="card-content">
                            <div class="card-title">Sepakbola</div>
                            <div class="card-desc">
                                PS Merpati Muda SMK PGRI 3 Malang berkiprah di Divisi 1 Liga internal Askot PSSI Kota
                                Malang,
                                dengan skuad mayoritas siswa aktif dan beberapa alumni.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksJurnal.png") }}" alt="Jurnalistik">
                        <div class="card-content">
                            <div class="card-title">Jurnalistik</div>
                            <div class="card-desc">
                                Ekskul yang mempelajari pencarian, penulisan, dan penyajian berita.
                                Peserta berlatih wawancara, menulis artikel, memotret, dan mengelola media sekolah.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset('assets/eksBTQ.png') }}" alt="BTQ">
                        <div class="card-content">
                            <div class="card-title">BTQ</div>
                            <div class="card-desc">
                                Ekskul fokus pembelajaran membaca, menulis, dan memahami Al-Qur’an sesuai tajwid,
                                untuk meningkatkan literasi dan keimanan peserta.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksBanjari.png") }}" alt="Banjari">
                        <div class="card-content">
                            <div class="card-title">Banjari</div>
                            <div class="card-desc">
                                Seni musik islami dengan rebana untuk sholawat, qasidah, dan lagu religi.
                                Melatih kekompakan sekaligus melestarikan budaya.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksBacakitab.png") }}" alt="Baca Kitab">
                        <div class="card-content">
                            <div class="card-title">Baca Kitab</div>
                            <div class="card-desc">Kegiatan pembelajaran membaca dan memahami kitab klasik berbahasa
                                Arab, yang biasanya berisi materi agama Islam, hukum, dan akhlak. Peserta didik dilatih
                                memahami tata bahasa Arab klasik dan maknanya.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset(assets/eksVoli.png) }}" alt="Voli">
                        <div class="card-content">
                            <div class="card-title">Voli</div>
                            <div class="card-desc">Ekskul bola voli sama halnya dengan futsal memiliki 2 tim yaitu putra
                                dan putri. 4x menjadi semifinalis di ajang turnamen bola voli yang diselenggarakan oleh
                                salah satu kampus swasta di Malang .</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset(assets/eksBasket.png) }}" alt="Basket">
                        <div class="card-content">
                            <div class="card-title">Basket</div>
                            <div class="card-desc">Sejak pertama hadir di Skariga, ekskul bola basket terus berkembang
                                pesat. Berkat kekompakan anggota dan tim pelatih, ekskul ini rutin mengikuti lomba antar
                                SMA/SMK sederajat. Terbaru, tim basket Skariga ikut ambil bagian dalam IMONOKE CUP Kota
                                Malang 2024.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset(assets/eksIlustrasi.png) }}" alt="Ilustrasi">
                        <div class="card-content">
                            <div class="card-title">Ilustrasi</div>
                            <div class="card-desc">Kegiatan yang mengasah keterampilan menggambar secara manual maupun
                                digital untuk menghasilkan karya visual. Peserta mempelajari komposisi, warna, teknik
                                gambar, dan penggunaan perangkat lunak desain.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset(assets/eksFotografi.png) }}" alt="Photography">
                        <div class="card-content">
                            <div class="card-title">Photography</div>
                            <div class="card-desc">Kegiatan mempelajari teknik pengambilan gambar menggunakan kamera,
                                termasuk pengaturan komposisi, pencahayaan, fokus, serta proses pengeditan. Fotografi
                                juga melatih kepekaan artistik dan kemampuan bercerita melalui visual</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset(assets/eksIndocraft.png) }}" alt="Indo Craft">
                        <div class="card-content">
                            <div class="card-title">Indo Craft</div>
                            <div class="card-desc">Kegiatan membuat kerajinan tangan khas Indonesia seperti anyaman,
                                batik, atau ukiran, serta pembelajaran menata taman atau ruang luar secara estetis dan
                                fungsional.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksTari.png") }}" alt="Tari">
                        <div class="card-content">
                            <div class="card-title">Tari</div>
                            <div class="card-desc">Ekstrakurikuler yang melestarikan seni tari khas daerah di Indonesia.
                                Peserta mempelajari gerakan, kostum, dan makna di balik tarian, sekaligus menumbuhkan
                                rasa cinta terhadap budaya bangsa.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksAndroid.png") }}" alt="Android Club">
                        <div class="card-content">
                            <div class="card-title">Android Club</div>
                            <div class="card-desc"> Kegiatan yang mempelajari pembuatan aplikasi berbasis Android mulai
                                dari desain antarmuka, logika program, hingga pengujian aplikasi.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksArduino.png") }}" alt="Arduino">
                        <div class="card-content">
                            <div class="card-title">Arduino</div>
                            <div class="card-desc">Komunitas yang berfokus pada pembelajaran dan pembuatan proyek
                                berbasis mikrokontroler Arduino, seperti otomasi, robotika, dan Internet of Things
                                (IoT).</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksCADD.png") }}" alt="CADD & CNC">
                        <div class="card-content">
                            <div class="card-title">CADD & CNC</div>
                            <div class="card-desc">Kegiatan merancang objek dengan perangkat lunak CAD (Computer-Aided
                                Design and Drafting) serta memproduksinya menggunakan mesin CNC (Computer Numerical
                                Control).</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksAutoplus.png") }}" alt="Auto Plus">
                        <div class="card-content">
                            <div class="card-title">Auto Plus</div>
                            <div class="card-desc">Ekstrakurikuler yang mempelajari otomotif secara menyeluruh, termasuk
                                perawatan, perbaikan, modifikasi, dan pemahaman teknis kendaraan bermotor.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksSains.png") }}" alt="Sains Club">
                        <div class="card-content">
                            <div class="card-title">Sains Club</div>
                            <div class="card-desc">Klub yang mendorong peserta melakukan eksperimen dan penelitian di
                                bidang sains, seperti fisika, kimia, dan biologi, untuk mengasah kemampuan berpikir
                                ilmiah.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksEnglish.png") }}" alt="Bahasa Inggris">
                        <div class="card-content">
                            <div class="card-title">Bahasa Inggris</div>
                            <div class="card-desc">Kegiatan untuk mengembangkan kemampuan berbahasa Inggris, meliputi
                                keterampilan berbicara, menulis, mendengarkan, membaca, serta penguasaan tata bahasa.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksBand.png") }}" alt="Band/Musik">
                        <div class="card-content">
                            <div class="card-title">Band/Musik</div>
                            <div class="card-desc">Ekstrakurikuler yang mengembangkan kemampuan bermain alat musik dan
                                bernyanyi, baik secara individu maupun kelompok, untuk tampil dalam acara sekolah atau
                                kompetisi.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksSastra.png") }}" alt="Sastra">
                        <div class="card-content">
                            <div class="card-title">Sastra</div>
                            <div class="card-desc">Kegiatan yang melatih keterampilan membaca, menulis, menganalisis,
                                dan mengapresiasi karya sastra, baik klasik maupun modern.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksKeputrian.png") }}" alt="Keputrian">
                        <div class="card-content">
                            <div class="card-title">Keputrian</div>
                            <div class="card-desc">Kegiatan khusus untuk peserta didik perempuan yang membahas
                                keterampilan hidup, etika, kepribadian, dan pembinaan keagamaan.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksAudio.png") }}" alt="Audio Video">
                        <div class="card-content">
                            <div class="card-title">Audio Video</div>
                            <div class="card-desc">Ekstrakurikuler yang mempelajari proses produksi media, mulai dari
                                perekaman audio dan video hingga penyuntingan dan pengemasan karya.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eks3d.png") }}" alt="3D Modeling">
                        <div class="card-content">
                            <div class="card-title">3D Modeling</div>
                            <div class="card-desc">Kegiatan yang mengajarkan pembuatan model tiga dimensi menggunakan
                                perangkat lunak, untuk keperluan desain, animasi, atau simulasi.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksBulutangkis.png") }}" alt="Bulu Tangkis">
                        <div class="card-content">
                            <div class="card-title">Bulu Tangkis</div>
                            <div class="card-desc">Olahraga raket yang dimainkan oleh dua atau empat orang, dengan
                                tujuan memukul kok melewati net dan menjatuhkannya di area lawan.</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset("assets/eksPaskib.png") }}" alt="PASKIBRAKA">
                        <div class="card-content">
                            <div class="card-title">PASKIBRAKA</div>
                            <div class="card-desc">Pasukan Pengibar Bendera yang memiliki tugas utama mengibarkan dan
                                menurunkan bendera merah putih pada upacara. Kegiatan ini melatih kedisiplinan,
                                kepemimpinan, dan kerja sama tim.</div>
                        </div>
                    </div>

                    <x-sidebar></x-sidebar>

                    <!-- Footer -->
                    <x-footer></x-footer>

                </div>
            </div>
</body>

</html>
