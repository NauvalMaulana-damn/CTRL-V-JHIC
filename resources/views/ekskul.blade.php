<x-layout title="Ekstrakurikuler - SMK PGRI 3 Malang" :headerTransparent="false">
    <div class="h-full h-max-content container mx-auto px-4 py-6">
        <!-- Hero SKARIGA -->
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

        <!-- Section yang akan di-update via AJAX -->
        <section class="w-full container py-12 md:py-16 overflow-hidden animate-fade-in" id="ekskul-content">
            <div class="max-w-full mx-auto">
                <h2 class="text-3xl md:text-5xl font-bold text-center mb-12">Ekstrakurikuler</h2>

                <!-- Loading indicator -->
                <div id="loading" class="hidden text-center py-8">
                    <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></div>
                    <p class="mt-2 text-gray-600">Memuat data...</p>
                </div>

                <!-- Content container -->
                <div id="ekskul-data">
                    @include('partials.ekskul-content', ['ekskuls' => $ekskuls])
                </div>
            </div>
        </section>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        let isLoading = false;

        // Event delegation pada document yang selalu ada
        document.addEventListener('click', function(e) {
            // Cek jika klik berasal dari pagination link
            const paginationLink = e.target.closest('#pagination-container a, .pagination a');

            if (!paginationLink ||
                paginationLink.classList.contains('text-gray-400') ||
                paginationLink.classList.contains('cursor-not-allowed') ||
                isLoading) {
                return;
            }

            e.preventDefault();

            const url = paginationLink.getAttribute('href');
            if (url && url !== '#' && url !== 'javascript:void(0)') {
                loadPage(url);
            }
        });

        function loadPage(url) {
            isLoading = true;

            const ekskulData = document.getElementById('ekskul-data');
            const loading = document.getElementById('loading');

            // Tampilkan loading
            ekskulData.style.opacity = '0.5';
            ekskulData.style.pointerEvents = 'none';
            loading.classList.remove('hidden');

            fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'text/html'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.text();
            })
            .then(html => {
                // Parse HTML response
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');

                // Cari element ekskul-data dalam response
                const newContent = doc.getElementById('ekskul-data');

                if (newContent) {
                    // Update content
                    ekskulData.innerHTML = newContent.innerHTML;

                    // Update URL history
                    window.history.pushState({url: url}, '', url);

                    // Smooth scroll ke top
                    const ekskulContent = document.getElementById('ekskul-content');
                    ekskulContent.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                } else {
                    // Fallback: reload page jika struktur tidak sesuai
                    console.warn('AJAX response structure unexpected, falling back to page reload');
                    window.location.href = url;
                }
            })
            .catch(error => {
                console.error('AJAX Error:', error);
                // Fallback ke refresh biasa jika AJAX gagal
                window.location.href = url;
            })
            .finally(() => {
                // Reset state
                ekskulData.style.opacity = '1';
                ekskulData.style.pointerEvents = 'auto';
                loading.classList.add('hidden');
                isLoading = false;
            });
        }

        // Handle browser back/forward buttons
        window.addEventListener('popstate', function(event) {
            if (event.state && event.state.url) {
                loadPage(event.state.url);
            } else {
                loadPage(window.location.href);
            }
        });

        // Prevent initial popstate trigger
        let initialPop = true;
        window.addEventListener('popstate', function(e) {
            if (initialPop) {
                initialPop = false;
                return;
            }
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
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .animate-spin {
        animation: spin 1s linear infinite;
    }
    </style>
</x-layout>
