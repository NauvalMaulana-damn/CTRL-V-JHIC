<x-layout title="Ekstrakurikuler - SMK PGRI 3 Malang" :headerTransparent="false">
    <div class="h-full h-max-content container mx-auto px-4 py-6">
        <!-- Hero SKARIGA -->
        <section class="relative h-[800px] mt-2 rounded-xl overflow-hidden">
            <div class="absolute inset-0 w-full h-full hover-scale">
                <img src="{{ asset('assets/ekstrahero.jpg') }}" alt="Hero SKARIGA" loading="lazy"
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

                <div class="max-w-full mx-auto">
                    <div class="grid grid-cols-3 gap-6">
                        @foreach ($ekskuls as $ekskul)
                        <x-ekscard title="{{ $ekskul->title }}" alt="{{ $ekskul->title }}" image="{{ $ekskul->image }}">
                            {{ $ekskul->desc }}
                        </x-ekscard>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-8 space-x-2" id="pagination-container">
                {{ $ekskuls->links('pagination::tailwind') }}
            </div>
        </section>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const paginationContainer = document.getElementById('pagination-container');

        function setupPagination() {
            if (paginationContainer) {
                // Hapus event listener lama untuk avoid duplicates
                paginationContainer.replaceWith(paginationContainer.cloneNode(true));
                const newPaginationContainer = document.getElementById('pagination-container');

                newPaginationContainer.addEventListener('click', function(e) {
                    const link = e.target.closest('a');

                    // Hanya handle link yang ACTIVE (bukan yang disabled)
                    if (link &&
                        !link.classList.contains('text-gray-400') &&
                        !link.classList.contains('cursor-not-allowed') &&
                        link.getAttribute('href') !== '#') {

                        e.preventDefault();
                        const url = link.getAttribute('href');

                        if (url && url !== window.location.href) {
                            loadPage(url);
                        }
                    }
                });
            }
        }

        function loadPage(url) {
            // Tampilkan loading
            const ekskulContent = document.getElementById('ekskul-content');
            ekskulContent.style.opacity = '0.6';
            ekskulContent.style.pointerEvents = 'none';

            // AJAX request
            fetch(url + '&ajax=1', {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'text/html'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(html => {
                // Parse HTML response
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newContent = doc.getElementById('ekskul-content');

                if (newContent) {
                    // Smooth transition
                    ekskulContent.style.opacity = '0';
                    setTimeout(() => {
                        // Replace content
                        document.getElementById('ekskul-content').innerHTML = newContent.innerHTML;

                        // Setup ulang event listeners untuk pagination baru
                        setupPagination();

                        // Smooth fade in
                        setTimeout(() => {
                            ekskulContent.style.opacity = '1';
                            ekskulContent.style.pointerEvents = 'auto';
                        }, 50);

                        // Scroll ke top section
                        ekskulContent.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 300);
                }

                // Update URL tanpa refresh
                window.history.pushState({}, '', url);
            })
            .catch(error => {
                console.error('Error:', error);
                // Fallback ke reload halaman
                ekskulContent.style.opacity = '1';
                ekskulContent.style.pointerEvents = 'auto';
                window.location.href = url;
            });
        }

        // Setup pagination pertama kali
        setupPagination();

        // Handle browser back/forward buttons
        window.addEventListener('popstate', function(e) {
            // Load page saat ini via AJAX
            if (e.state) {
                loadPage(window.location.href);
            }
        });

        // Prevent default behavior untuk link disabled
        document.addEventListener('click', function(e) {
            if (e.target.closest('a.text-gray-400') ||
                e.target.closest('a.cursor-not-allowed')) {
                e.preventDefault();
            }
        });
    });
    </script>

    <style>
    #ekskul-content {
        transition: opacity 0.3s ease-in-out;
    }

    /* Style untuk pagination yang disabled */
    .text-gray-400, .cursor-not-allowed {
        pointer-events: none;
    }
    </style>
</x-layout>
