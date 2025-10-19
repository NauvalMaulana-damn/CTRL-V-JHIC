<x-layout title="Ekstrakurikuler - SMK PGRI 3 Malang" :headerTransparent="false">
    <div class="h-full h-max-content container mx-auto px-4 py-6">
        <section class="relative h-[800px] mt-2 rounded-xl overflow-hidden">
            <div class="absolute inset-0 w-full h-full hover-scale">
                <img src="{{ $assetBase . '/assets/ekstrahero_11zon.webp' }}" alt="Hero SKARIGA" loading="lazy"
                    class="w-full h-full object-cover ">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
            </div>
            <div class="absolute bottom-8 left-3.5 md:left-10 z-10">
                <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-lg hover-scale cursor-default">
                    KEMBANGKAN<br>BAKATMU!
                </h1>
            </div>
        </section>

        <section class="w-full container py-12 md:py-16 overflow-hidden animate-fade-in" id="ekskul-content">
            <div class="max-w-full mx-auto">
                <h2 class="text-3xl md:text-5xl font-bold text-center mb-12">Ekstrakurikuler</h2>

                <div id="loading" class="hidden text-center py-8">
                    <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></div>
                    <p class="mt-2 text-gray-600">Memuat data...</p>
                </div>

                <div id="ekskul-data">
                    <div class="max-w-full mx-auto">
                        <div class="grid grid-cols-3 gap-6">
                            @foreach ($ekskuls as $ekskul)
                            <x-ekscard title="{{ $ekskul->title }}" alt="{{ $ekskul->title }}"
                                image="{{ $ekskul->image }}">
                                {{ $ekskul->desc }}
                            </x-ekscard>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex justify-center mt-8 space-x-2" id="pagination-container">
                        {{ $ekskuls->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        let isLoading = false;

        document.addEventListener('click', function(e) {
            const link = e.target.closest('a');

            if (!link) return;

            const href = link.getAttribute('href');

            if (!href || !href.includes('?page=')) return;

            const isInPaginationContainer = link.closest('#pagination-container') ||
                link.closest('.pagination') ||
                link.parentElement.classList.contains('pagination');

            if (!isInPaginationContainer) return;

            // Cek jika link disabled atau sedang loading
            if (link.classList.contains('text-gray-400') ||
                link.classList.contains('cursor-not-allowed') ||
                isLoading) {
                return;
            }

            e.preventDefault();
            loadPage(href);
        });

        function loadPage(url) {
            isLoading = true;

            const ekskulData = document.getElementById('ekskul-data');
            const loading = document.getElementById('loading');

            // Tampilkan loading
            ekskulData.style.opacity = '0.5';
            ekskulData.style.pointerEvents = 'none';
            loading.classList.remove('hidden');

            fetch(url + '&ajax=true', {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(html => {
                    // Parse the entire HTML response
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');

                    // Extract hanya bagian ekskul-data dari response
                    const newEkskulData = doc.getElementById('ekskul-data');

                    if (newEkskulData) {
                        // Update content
                        ekskulData.innerHTML = newEkskulData.innerHTML;

                        // Update URL tanpa refresh
                        window.history.pushState({}, '', url);

                        // Scroll ke top dengan smooth effect
                        document.getElementById('ekskul-content').scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Fallback ke page reload jika AJAX gagal
                    window.location.href = url;
                })
                .finally(() => {
                    // Sembunyikan loading
                    ekskulData.style.opacity = '1';
                    ekskulData.style.pointerEvents = 'auto';
                    loading.classList.add('hidden');
                    isLoading = false;
                });
        }

        // Handle browser back/forward buttons
        window.addEventListener('popstate', function() {
            loadPage(window.location.href);
        });
    });
    </script>

    <style>
    #ekskul-content {
        transition: opacity 0.3s ease-in-out;
    }

    #ekskul-data {
        transition: all 0.3s ease-in-out;
    }

    /* Style untuk pagination yang disabled */
    .text-gray-400,
    .cursor-not-allowed {
        pointer-events: none;
    }

    /* Loading animation */
    .animate-spin {
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }
    </style>
</x-layout>
