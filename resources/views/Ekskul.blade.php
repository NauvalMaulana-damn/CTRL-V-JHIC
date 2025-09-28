<x-layout title="SMK PGRI 3 MALANG - Success By Discipline" :headerTransparent="true">
    <!-- Hero SKARIGA -->
    <section class="relative w-full h-screen flex items-end z-10">
        <!-- Wrapper gambar -->
        <div class="absolute inset-0 w-full h-full">
            <img src="{{ asset('assets/ekstrahero.jpg') }}" alt="Hero SKARIGA" class="w-full h-full object-cover">

            <!-- Gradient overlay hanya bagian bawah -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
        </div>

        <!-- Teks tetap di atas -->
        <div class="relative z-10 p-8 md:p-16">
            <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-lg">KEMBANGKAN BAKATMU!</h1>
        </div>
    </section>

    <!-- Alumni Section -->
    <section class="py-12 md:py-16 animate-fade-in">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-12">Ekstrakurikuler</h2>

            <div class="max-w-[1200px] mx-auto px-4">
                <div class="grid gird-cols-3 gap-6">
                    @foreach ($ekskuls as $ekskul)
                    <x-ekscard title="{{ $ekskul->title }}" alt="{{ $ekskul->title }}" image="{{ $ekskul->image }}">
                        {{ $ekskul->desc }}
                    </x-ekscard>
                    @endforeach
                </div>
            </div>
    </section>
</x-layout>
