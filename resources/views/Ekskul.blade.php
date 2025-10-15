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

        <section class="w-full container py-12 md:py-16 overflow-hidden animate-fade-in">
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
        </section>

        <div class="flex justify-center mt-0 space-x-2">
            {{ $ekskuls->links() }}
        </div>
    </div>
</x-layout>
