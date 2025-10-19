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
    @vite(['resources/js/ekskul.js'])
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
