<x-layout title="">
    <div class="h-full h-max-content container mx-auto px-4 py-6">
        <section class="w-full relative h-[600px] mt-2 rounded-xl overflow-hidden">
            <div class="absolute inset-0 max-w-full mx-auto h-full hover-scale rounded-2xl overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-t from-transparent via-black/5 to-black/70"></div>
                <img src="{{ asset('assets/alumni.png') }}" alt="Hero SKARIGA" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
            </div>

            <!-- Progress Bar -->
            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 w-[90%] inset-x-4">
                <div class="mb-4 h-2 md:h-3 relative max-w-full mx-auto bg-white/40 rounded-full">
                    <div class="h-full bg-white rounded-full" style="width:40%"></div>
                    <div class="absolute bottom-4 inset-x-4 md:inset-x-12 lg:inset-x-24">
                    </div>
                </div>

                <!-- Controls -->
                <div class="flex justify-center items-center space-x-4 md:space-x-6 text-xl md:text-2xl">
                    <button class="p-2 md:p-3 text-white rounded-full hover:bg-white/20 transition"><i
                            class="fa-solid fa-shuffle"></i></button>
                    <button class="p-2 md:p-3 text-white rounded-full hover:bg-white/20 transition"><i
                            class="fa-solid fa-backward-step"></i></button>
                    <button
                        class="p-3 md:p-4 rounded-full bg-orange-500 text-white shadow-lg hover:bg-orange-600 transition"><i
                            class="fa-solid fa-pause"></i></button>
                    <button class="p-2 md:p-3 text-white rounded-full hover:bg-white/20 transition"><i
                            class="fa-solid fa-forward-step"></i></button>
                    <button class="p-2 md:p-3 text-white rounded-full hover:bg-white/20 transition"><i
                            class="fa-solid fa-repeat"></i></button>
                </div>
            </div>
        </section>

        <!-- Alumni Section -->
        <section class="py-12 md:py-16 animate-fade-in">
            <div class="max-w-full container mx-auto">
                <h2 class="text-3xl md:text-5xl font-bold text-center mb-4 text-gray-800">PARA JAWARA!</h2>
                <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Alumni-alumni berprestasi SMK Negeri 1 Geger yang telah sukses di dunia kerja</p>

                <!-- Alumni Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="alumni-container">
                    <!-- Kartu alumni akan ditampilkan di sini melalui JavaScript -->
                </div>

                <!-- Pagination control - Mengikuti gaya dari kode referensi -->
                <div class="flex justify-center mt-12 space-x-2" id="pagination-controls">
                    <!-- Pagination akan di-generate oleh JavaScript -->
                </div>
            </div>
        </section>
    </div>

    <style>
        .alumni-card {
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        }

        .alumni-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .alumni-image {
            transition: all 0.3s ease;
            border: 4px solid white;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .alumni-card:hover .alumni-image {
            transform: scale(1.05);
            border-color: #FF885B;
        }

        .pagination-btn {
            transition: all 0.3s ease;
        }

        .pagination-btn.active {
            background-color: #3b82f6; /* bg-customBlue */
            color: white;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data alumni yang lebih lengkap
            const alumniData = [
                {
                    id: 1,
                    name: "Khoko Rama Viera",
                    graduation: "Alumni 2018",
                    position: "Teknisi Mesin",
                    company: "Hitachi Construction Machinery Jepang",
                    description: "Berhasil bekerja di perusahaan konstruksi terkemuka di Jepang dengan kontrak 3 tahun.",
                    image: "assets/image 17.png",
                    bgColor: "from-[#FF885B] to-[#FF6B6B]",
                    achievements: ["Juara 1 Lomba Kompetensi Siswa 2017", "Sertifikasi Teknisi Internasional"]
                },
                {
                    id: 2,
                    name: "Aditya Tantra",
                    graduation: "Alumni TKR 2018",
                    position: "Teknisi Otomotif",
                    company: "Daihatsu Motor CO.LTD Jepang",
                    description: "Berkarier di perusahaan otomotif ternama Jepang dengan spesialisasi mesin diesel.",
                    image: "assets/image 46.png",
                    bgColor: "from-[#FF4D4D] to-[#FF6B9D]",
                    achievements: ["Magang di Daihatsu 2017", "Nilai UN Tertinggi Jurusan TKR"]
                },
                {
                    id: 3,
                    name: "Reza Abi Utomo",
                    graduation: "Alumni TP 2017",
                    position: "Quality Control Engineer",
                    company: "PT. JIAEC Indonesia",
                    description: "Memastikan kualitas produk elektronik dengan standar internasional.",
                    image: "assets/image 43.png",
                    bgColor: "from-[#4DA6FF] to-[#6B8CFF]",
                    achievements: ["Inovator Terbaik 2019", "Sertifikasi ISO 9001"]
                },
                {
                    id: 4,
                    name: "Choiriatul Aulia",
                    graduation: "Alumni El 2017",
                    position: "Electrical Engineer",
                    company: "PT. Surabaya AutoComp Indonesia",
                    description: "Mengembangkan sistem kelistrikan untuk komponen otomotif modern.",
                    image: "https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&h=200&q=80",
                    bgColor: "from-[#FFD84D] to-[#FFB84D]",
                    achievements: ["Perempuan Berprestasi 2018", "Pengembang Sistem IoT"]
                },
                {
                    id: 5,
                    name: "Febrianto Nugroho",
                    graduation: "Alumni TP 2016",
                    position: "Production Supervisor",
                    company: "Eagle Industry Indonesia",
                    description: "Memimpin tim produksi dengan efisiensi tinggi dan inovasi berkelanjutan.",
                    image: "assets/image 44.png",
                    bgColor: "from-[#2ECC71] to-[#27AE60]",
                    achievements: ["Employee of the Year 2020", "Peningkatan Produktivitas 35%"]
                },
                {
                    id: 6,
                    name: "Ahmad Fauzan",
                    graduation: "Alumni El 2017",
                    position: "Network Specialist",
                    company: "Rekavisitama Digital",
                    description: "Membangun infrastruktur jaringan untuk perusahaan teknologi terdepan.",
                    image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&h=200&q=80",
                    bgColor: "from-[#9B59B6] to-[#8E44AD]",
                    achievements: ["CCNA Certified", "Arsitek Jaringan 5G Pertama"]
                },
                {
                    id: 7,
                    name: "Tiyyo Fahmi",
                    graduation: "Alumni TKJ 2017",
                    position: "System Administrator",
                    company: "PT. Inovasi Tjaraka Buana (MYNET)",
                    description: "Mengelola sistem server dan keamanan jaringan untuk klien korporat.",
                    image: "assets/image 45.png",
                    bgColor: "from-[#FF5C8D] to-[#FF6B6B]",
                    achievements: ["Microsoft Certified", "Pengembang Cybersecurity System"]
                },
                {
                    id: 8,
                    name: "Ximent Sultan",
                    graduation: "Alumni TKR 2024",
                    position: "Automotive Technician",
                    company: "PT. Bagong Dekaka Makmur",
                    description: "Fresh graduate yang langsung terserap industri dengan skill mumpuni.",
                    image: "assets/Ellipse 24.png",
                    bgColor: "from-[#3498DB] to-[#2980B9]",
                    achievements: ["Lulusan Terbaik 2024", "Nilai Praktik Tertinggi"]
                }
            ];

            // Konfigurasi pagination
            const itemsPerPage = 6;
            let currentPage = 1;
            const totalPages = Math.ceil(alumniData.length / itemsPerPage);

            // Fungsi untuk menampilkan alumni berdasarkan halaman
            function displayAlumni(page) {
                const container = document.getElementById('alumni-container');
                container.innerHTML = '';

                const startIndex = (page - 1) * itemsPerPage;
                const endIndex = Math.min(startIndex + itemsPerPage, alumniData.length);

                for (let i = startIndex; i < endIndex; i++) {
                    const alumni = alumniData[i];
                    const card = document.createElement('div');
                    card.className = 'alumni-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100';

                    card.innerHTML = `
                        <div class="relative h-40 bg-gradient-to-r ${alumni.bgColor}">
                            <div class="absolute -bottom-12 left-1/2 transform -translate-x-1/2">
                                <img src="${alumni.image}" alt="${alumni.name}"
                                    class="alumni-image w-24 h-24 rounded-full object-cover">
                            </div>
                        </div>

                        <div class="pt-16 pb-6 px-6 text-center">
                            <h3 class="text-xl font-bold text-gray-800 mb-1">${alumni.name}</h3>
                            <p class="text-sm text-gray-600 mb-2">${alumni.graduation}</p>

                            <div class="bg-gradient-to-r ${alumni.bgColor} text-white py-2 px-4 rounded-full inline-block mb-4">
                                <p class="text-sm font-semibold">${alumni.position}</p>
                            </div>

                            <div class="flex items-center justify-center mb-3 text-gray-700">
                                <i class="fas fa-building text-sm mr-2"></i>
                                <p class="text-sm font-medium">${alumni.company}</p>
                            </div>

                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">${alumni.description}</p>

                            <div class="border-t border-gray-100 pt-4">
                                <p class="text-xs font-semibold text-gray-500 mb-2">PRESTASI:</p>
                                <div class="flex flex-wrap justify-center gap-2">
                                    ${alumni.achievements.map(achievement =>
                                        `<span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">${achievement}</span>`
                                    ).join('')}
                                </div>
                            </div>
                        </div>
                    `;

                    container.appendChild(card);
                }
            }

            // Fungsi untuk membuat kontrol pagination dengan gaya yang diminta
            function createPaginationControls() {
                const container = document.getElementById('pagination-controls');
                container.innerHTML = '';

                // Tombol Previous
                const prevButton = document.createElement('button');
                prevButton.className = 'px-3 py-1 bg-gray-200 rounded-full hover:bg-gray-300 transition disabled:opacity-50';
                prevButton.innerHTML = '←';
                prevButton.disabled = currentPage === 1;
                prevButton.addEventListener('click', () => {
                    if (currentPage > 1) {
                        currentPage--;
                        displayAlumni(currentPage);
                        createPaginationControls();
                    }
                });
                container.appendChild(prevButton);

                // Tombol nomor halaman
                for (let i = 1; i <= totalPages; i++) {
                    const pageButton = document.createElement('button');
                    pageButton.className = `px-3 py-1 rounded-full transition pagination-btn ${
                        currentPage === i ? 'bg-customBlue text-white' : 'bg-gray-200 hover:bg-gray-300'
                    }`;
                    pageButton.textContent = i;
                    pageButton.addEventListener('click', () => {
                        currentPage = i;
                        displayAlumni(currentPage);
                        createPaginationControls();
                    });
                    container.appendChild(pageButton);
                }

                // Tombol Next
                const nextButton = document.createElement('button');
                nextButton.className = 'px-3 py-1 bg-gray-200 rounded-full hover:bg-gray-300 transition disabled:opacity-50';
                nextButton.innerHTML = '→';
                nextButton.disabled = currentPage === totalPages;
                nextButton.addEventListener('click', () => {
                    if (currentPage < totalPages) {
                        currentPage++;
                        displayAlumni(currentPage);
                        createPaginationControls();
                    }
                });
                container.appendChild(nextButton);
            }

            // Inisialisasi tampilan
            displayAlumni(currentPage);
            createPaginationControls();
        });
    </script>
</x-layout>
