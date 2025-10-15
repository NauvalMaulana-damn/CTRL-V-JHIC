<x-layout title="Berita - SMK PGRI 3 Malang">
    <div class="bg-gray-50">
        <section class="bg-gradient-to-r from-custombbg-customBlue to-blue-800 text-white py-12">
            <div class="container mx-auto px-4 py-4">
                <div class="max-w-1xl">
                    <h1 class="text-4xl font-bold mb-4 text-gray-700">Berita Terkini Skariga</h1>
                    <p class="text-lg text-gray-500">Ikuti perkembangan terbaru seputar kegiatan, prestasi, dan informasi penting
                        dari SMK PGRI 3 Malang.</p>
                </div>
            </div>
        </section>

        <!-- Sidebar untuk Detail Berita -->
        <div class="sidebar-overlay fixed inset-0 bg-black bg-opacity-50 z-40 opacity-0 invisible transition-all duration-300 ease-in-out"
            id="sidebarOverlay"></div>

        <div class="sidebar fixed top-0 right-[-100%] w-1/2 h-full bg-white z-50 overflow-y-auto transition-right duration-300 ease-in-out shadow-2xl"
            id="newsSidebar">
            <!-- Tombol Close -->
            <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 z-10 transition-colors"
                id="closeSidebar">
                <i class="fas fa-times text-xl"></i>
            </button>

            <!-- Konten Sidebar -->
            <div class="p-6 pt-12">
                <!-- Gambar -->
                <img id="sidebarImage" src="" alt="" class="w-full h-64 object-cover rounded-xl mb-6">

                <!-- Judul -->
                <h2 id="sidebarTitle" class="text-2xl font-bold text-custombbg-customBlue mb-4"></h2>

                <!-- Info tambahan -->
                <div class="flex items-center text-sm text-gray-500 mb-6">
                    <span class="mr-4"><i class="far fa-calendar-alt mr-1"></i> <span id="sidebarDate"></span></span>
                    <span><i class="far fa-eye mr-1"></i> <span id="sidebarViews"></span> dilihat</span>
                </div>

                <!-- Konten -->
                <div id="sidebarContent" class="text-gray-700 leading-relaxed whitespace-pre-line mb-8"></div>

                <!-- Tombol untuk lihat detail lengkap -->
                <a id="sidebarDetailLink" href="#" class="inline-block bg-customBlue hover:bg-blue-800 text-white px-6 py-3 rounded-lg font-semibold transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>Lihat Detail Lengkap
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <main class="container mx-auto px-4 py-8">
            <!-- Filter Section -->
            <div class="flex flex-wrap justify-between items-center mb-8 bg-white p-4 rounded-lg shadow">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-xl font-bold text-customBlue">Kumpulan Berita</h2>
                    <p class="text-gray-600">Temukan informasi terbaru dari sekolah</p>
                </div>

                <div class="flex flex-wrap gap-2" id="filterButtons">
                    <button
                        class="filter-btn {{ ($type ?? 'all') === 'all' ? 'bg-customBlue text-white' : 'bg-gray-200 hover:bg-gray-300 text-gray-700' }} px-4 py-2 rounded-lg text-sm font-medium transition-colors"
                        data-type="all">
                        Semua
                    </button>
                    <button
                        class="filter-btn {{ ($type ?? 'all') === 'prestasi' ? 'bg-customBlue text-white' : 'bg-gray-200 hover:bg-gray-300 text-gray-700' }} px-4 py-2 rounded-lg text-sm font-medium transition-colors"
                        data-type="prestasi">
                        Prestasi
                    </button>
                    <button
                        class="filter-btn {{ ($type ?? 'all') === 'kegiatan' ? 'bg-customBlue text-white' : 'bg-gray-200 hover:bg-gray-300 text-gray-700' }} px-4 py-2 rounded-lg text-sm font-medium transition-colors"
                        data-type="kegiatan">
                        Kegiatan
                    </button>
                    <button
                        class="filter-btn {{ ($type ?? 'all') === 'pengumuman' ? 'bg-customBlue text-white' : 'bg-gray-200 hover:bg-gray-300 text-gray-700' }} px-4 py-2 rounded-lg text-sm font-medium transition-colors"
                        data-type="pengumuman">
                        Pengumuman
                    </button>
                    <button
                        class="filter-btn {{ ($type ?? 'all') === 'acara' ? 'bg-customBlue text-white' : 'bg-gray-200 hover:bg-gray-300 text-gray-700' }} px-4 py-2 rounded-lg text-sm font-medium transition-colors"
                        data-type="acara">
                        Acara
                    </button>
                </div>
            </div>

            <!-- Loading Indicator -->
            <div id="loadingIndicator" class="hidden flex justify-center items-center py-12">
                <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-customBlue"></div>
                <span class="ml-3 text-gray-600">Memuat berita...</span>
            </div>

            <!-- News Grid -->
            <div id="newsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                @foreach ($beritas as $berita)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                        <div class="relative">
                            <img src="{{ $berita->gambar_url }}" alt="{{ $berita->title }}"
                                class="w-full h-48 object-cover"  loading="lazy">
                            <div class="absolute top-4 left-4">
                                <span class="bg-customBlue text-white px-3 py-1 rounded-full text-xs font-medium">
                                    {{ ucfirst($berita->type) }}
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between text-sm text-gray-500 mb-2">
                                <span><i class="far fa-calendar-alt mr-1"></i>
                                    {{ $berita->created_at->format('d M Y') }}</span>
                                <span><i class="far fa-eye mr-1"></i> {{ $berita->views }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $berita->title }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">{{ Str::limit($berita->deskripsi, 120) }}</p>
                            <button
                                class="read-more-btn inline-block bg-customBlue hover:bg-blue-800 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors"
                                data-image="{{ $berita->gambar_url }}"
                                data-title="{{ $berita->title }}"
                                data-date="{{ $berita->created_at->format('d M Y') }}"
                                data-views="{{ $berita->views }}"
                                data-content="{{ $berita->deskripsi }}"
                                data-slug="{{ $berita->slug }}">
                                Baca Selengkapnya
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Empty State -->
            <div id="emptyState" class="hidden text-center py-12">
                <i class="fas fa-newspaper text-6xl text-gray-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Tidak ada berita ditemukan</h3>
                <p class="text-gray-500">Coba gunakan filter yang berbeda</p>
            </div>

            <!-- Pagination -->
            @if($beritas->hasPages())
            <div id="paginationContainer" class="flex justify-center mb-12">
                <div class="flex space-x-2">
                    {{-- Previous Page Link --}}
                    @if ($beritas->onFirstPage())
                        <span class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-200 text-gray-400 cursor-not-allowed">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    @else
                        <a href="{{ $beritas->previousPageUrl() }}{{ isset($type) && $type !== 'all' ? '&type=' . $type : '' }}"
                           class="w-10 h-10 flex items-center justify-center rounded-lg bg-customBlue text-white hover:bg-blue-800 transition-colors">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($beritas->getUrlRange(1, $beritas->lastPage()) as $page => $url)
                        @if ($page == $beritas->currentPage())
                            <span class="w-10 h-10 flex items-center justify-center rounded-lg bg-customBlue text-white">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}{{ isset($type) && $type !== 'all' ? '&type=' . $type : '' }}"
                               class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($beritas->hasMorePages())
                        <a href="{{ $beritas->nextPageUrl() }}{{ isset($type) && $type !== 'all' ? '&type=' . $type : '' }}"
                           class="w-10 h-10 flex items-center justify-center rounded-lg bg-customBlue text-white hover:bg-blue-800 transition-colors">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    @else
                        <span class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-200 text-gray-400 cursor-not-allowed">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    @endif
                </div>
            </div>
            @endif
        </main>
    </div>

    <style>
        /* Custom styles untuk sidebar responsif */
        @media (max-width: 768px) {
            .sidebar {
                width: 85% !important;
            }
        }

        @media (max-width: 480px) {
            .sidebar {
                width: 95% !important;
            }
        }

        .sidebar.active {
            right: 0 !important;
        }

        .sidebar-overlay.active {
            opacity: 1 !important;
            visibility: visible !important;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>

    <script>
        // Fungsi untuk membuka sidebar
        function openSidebar(image, title, date, views, content, slug) {
            document.getElementById('sidebarImage').src = image;
            document.getElementById('sidebarTitle').textContent = title;
            document.getElementById('sidebarDate').textContent = date;
            document.getElementById('sidebarViews').textContent = views;
            document.getElementById('sidebarContent').textContent = content;
            document.getElementById('sidebarDetailLink').href = `/berita/${slug}`;

            document.getElementById('sidebarOverlay').classList.add('active');
            document.getElementById('newsSidebar').classList.add('active');

            // Mencegah scroll pada body saat sidebar terbuka
            document.body.style.overflow = 'hidden';
        }

        // Fungsi untuk menutup sidebar
        function closeSidebar() {
            document.getElementById('sidebarOverlay').classList.remove('active');
            document.getElementById('newsSidebar').classList.remove('active');

            // Mengembalikan scroll pada body
            document.body.style.overflow = 'auto';
        }

        // Fungsi untuk filter berita
        function filterBerita(type) {
            const loadingIndicator = document.getElementById('loadingIndicator');
            const newsGrid = document.getElementById('newsGrid');
            const emptyState = document.getElementById('emptyState');
            const paginationContainer = document.getElementById('paginationContainer');
            const filterButtons = document.querySelectorAll('.filter-btn');

            // Tampilkan loading
            loadingIndicator.classList.remove('hidden');
            newsGrid.classList.add('opacity-50');
            if (paginationContainer) {
                paginationContainer.classList.add('opacity-50');
            }

            // Update URL tanpa reload page
            const url = new URL(window.location);
            if (type === 'all') {
                url.searchParams.delete('type');
            } else {
                url.searchParams.set('type', type);
            }

            window.history.pushState({}, '', url);

            // Kirim request AJAX
            fetch(`/berita?type=${type}&ajax=1`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Update tombol filter
                    filterButtons.forEach(btn => {
                        if (btn.dataset.type === type) {
                            btn.classList.remove('bg-gray-200', 'text-gray-700');
                            btn.classList.add('bg-customBlue', 'text-white');
                        } else {
                            btn.classList.remove('bg-customBlue', 'text-white');
                            btn.classList.add('bg-gray-200', 'text-gray-700');
                        }
                    });

                    // Update grid berita
                    if (data.beritas.length > 0) {
                        newsGrid.innerHTML = data.beritas.map(berita => `
                            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                                <div class="relative">
                                    <img src="${berita.gambar_url}" alt="${berita.title}"
                                        class="w-full h-48 object-cover">
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-customBlue text-white px-3 py-1 rounded-full text-xs font-medium">
                                            ${berita.type.charAt(0).toUpperCase() + berita.type.slice(1)}
                                        </span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex justify-between text-sm text-gray-500 mb-2">
                                        <span><i class="far fa-calendar-alt mr-1"></i>${berita.created_at}</span>
                                        <span><i class="far fa-eye mr-1"></i> ${berita.views} dilihat</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">${berita.title}</h3>
                                    <p class="text-gray-600 mb-4 line-clamp-3">${berita.deskripsi.substring(0, 120)}...</p>
                                    <button
                                        class="read-more-btn inline-block bg-customBlue hover:bg-blue-800 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors"
                                        data-image="${berita.gambar_url}"
                                        data-title="${berita.title}"
                                        data-date="${berita.created_at}"
                                        data-views="${berita.views}"
                                        data-content="${berita.deskripsi}"
                                        data-slug="${berita.slug}">
                                        Baca Selengkapnya
                                    </button>
                                </div>
                            </div>
                        `).join('');

                        emptyState.classList.add('hidden');
                        newsGrid.classList.remove('hidden');

                        // Sembunyikan pagination untuk sementara (bisa ditambahkan logika pagination AJAX nanti)
                        if (paginationContainer) {
                            paginationContainer.classList.add('hidden');
                        }
                    } else {
                        newsGrid.classList.add('hidden');
                        emptyState.classList.remove('hidden');
                        if (paginationContainer) {
                            paginationContainer.classList.add('hidden');
                        }
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Fallback: redirect biasa jika AJAX gagal
                    window.location.href = `/berita?type=${type}`;
                })
                .finally(() => {
                    loadingIndicator.classList.add('hidden');
                    newsGrid.classList.remove('opacity-50');
                    if (paginationContainer) {
                        paginationContainer.classList.remove('opacity-50');
                    }

                    // Re-attach event listeners untuk tombol baca selengkapnya
                    attachReadMoreListeners();
                });
        }

        // Fungsi untuk attach event listeners
        function attachReadMoreListeners() {
            document.querySelectorAll('.read-more-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const image = this.getAttribute('data-image');
                    const title = this.getAttribute('data-title');
                    const date = this.getAttribute('data-date');
                    const views = this.getAttribute('data-views');
                    const content = this.getAttribute('data-content');
                    const slug = this.getAttribute('data-slug');

                    openSidebar(image, title, date, views, content, slug);
                });
            });
        }

        // Event listener saat DOM siap
        document.addEventListener('DOMContentLoaded', function() {
            // Event listener untuk tombol filter
            document.querySelectorAll('.filter-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const type = this.dataset.type;
                    filterBerita(type);
                });
            });

            // Event listener untuk tombol close sidebar
            document.getElementById('closeSidebar').addEventListener('click', closeSidebar);

            // Event listener untuk overlay (menutup sidebar saat klik di luar)
            document.getElementById('sidebarOverlay').addEventListener('click', closeSidebar);

            // Menutup sidebar dengan tombol ESC
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    closeSidebar();
                }
            });

            // Attach initial event listeners
            attachReadMoreListeners();

            // Handle browser back/forward buttons
            window.addEventListener('popstate', function() {
                const urlParams = new URLSearchParams(window.location.search);
                const type = urlParams.get('type') || 'all';
                filterBerita(type);
            });
        });
    </script>
</x-layout>
