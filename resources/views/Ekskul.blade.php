<x-layout title="SMK PGRI 3 MALANG - Success By Discipline" :headerTransparent="true">
    <style>
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
    </style>
    <!-- Hero SKARIGA -->
    <section class="relative w-full h-screen flex items-end z-10">
        <!-- Wrapper gambar -->
        <div class="absolute inset-0 w-full h-full">
            <img src="https://placehold.co/1920x1080" alt="Hero SKARIGA" class="w-full h-full object-cover">

            <!-- Gradient overlay hanya bagian bawah -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
        </div>

        <!-- Teks tetap di atas -->
        <div class="relative z-10 p-8 md:p-16">
            <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-lg">SKARIGA!</h1>
        </div>
    </section>

    <!-- Alumni Section -->
    <section class="py-12 md:py-16 animate-fade-in">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-12">Ekstrakurikuler</h2>

            <div class="container">
                <div class="grid">
                    @foreach ($ekskuls as $ekskul)
                    <x-ekscard>
                        <x-slot name="image">{{ $ekskul->image }}</x-slot>
                        <x-slot name="title">{{ $ekskul->name }}</x-slot>
                        {{ $ekskul->desc }}
                    </x-ekscard>
                    @endforeach
                </div>
            </div>
    </section>
</x-layout>
