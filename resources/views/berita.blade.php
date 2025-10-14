<x-layout title="Berita - SMK PGRI 3 Malang">
    <div class="bg-gray-50">
        <section class="bg-gradient-to-r from-custombbg-customBlue to-blue-800 text-white py-12 mt-[-8rem]">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl">
                    <h1 class="text-4xl font-bold mb-4">Berita Terkini Skariga</h1>
                    <p class="text-lg mb-6">Ikuti perkembangan terbaru seputar kegiatan, prestasi, dan informasi penting
                        dari SMK PGRI 3 Malang.</p>
                    <div class="flex space-x-4">
                        <button
                            class="bg-customOrange hover:bg-orange-600 text-white px-6 py-2 rounded-lg font-semibold transition-colors">
                            <i class="fas fa-newspaper mr-2"></i>Semua Berita
                        </button>
                        <button
                            class="bg-white text-customBlue hover:bg-gray-100 px-6 py-2 rounded-lg font-semibold transition-colors">
                            <i class="fas fa-calendar-alt mr-2"></i>Kalender Akademik
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal micromodal-slide" id="newsModal" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="modal__container bg-white rounded-xl w-full max-w-2xl shadow-2xl relative" role="dialog"
                    aria-modal="true" aria-labelledby="modalTitle">
                    <!-- Tombol Close -->
                    <button
                        class="absolute top-3 right-3 text-white hover:text-gray-400 transition-colors delay-[25ms  ]"
                        aria-label="Close modal" data-micromodal-close>
                        <i class="fas fa-times text-xl"></i>
                    </button>

                    <!-- Gambar -->
                    <img id="modalImage" src="" alt="" class="w-full h-80 object-cover rounded-t-xl">

                    <!-- Konten -->
                    <div class="p-6">
                        <h2 id="modalTitle" class="text-2xl font-bold text-custombbg-customBlue mb-4"></h2>
                        <p id="modalContent" class="text-gray-700 leading-relaxed whitespace-pre-line"></p>
                    </div>
                </div>
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

                <div class="flex flex-wrap gap-2">
                    <button class="bg-customBlue text-white px-4 py-2 rounded-lg text-sm font-medium">Semua</button>
                    <button
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium">Prestasi</button>
                    <button
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium">Kegiatan</button>
                    <button
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium">Pengumuman</button>
                    <button
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium">Acara</button>
                </div>
            </div>

            <!-- News Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                @foreach ($beritas as $berita)
                <x-cardberita views="{{ $berita->views }}" desc="{{ $berita->deskripsi }}" type="{{ $berita->type }}" date="{{ $berita->created_at }}" image="{{ $berita->gambar }}"
                    title="{{ $berita->title }}">
                    {{ $berita->deskripsi }}
                </x-cardberita>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mb-12">
                <div class="flex space-x-2">
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-customBlue text-white">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-customBlue text-white">1</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300">2</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300">3</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </main>
    </div>

    <script>
    document.addEventListener('click', (e) => {
        const modal = document.getElementById('newsModal');
        if (!modal) return;

        const container = modal.querySelector('.modal__container');
        if (modal.classList.contains('is-open') && container && !container.contains(e.target)) {
            MicroModal.close('newsModal');
        }
    });
    </script>
</x-layout>
