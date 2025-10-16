@props(['bgColor' => 'BLUE', 'title' => '', 'image' => ''])

@php
    $colorClasses = [
        'BLUE' => 'bg-blue-500',
        'GREEN' => 'bg-green-500',
        'ORANGE' => 'bg-orange-500',
        'RED' => 'bg-red-500'
    ];

    $bgClass = $colorClasses[$bgColor] ?? 'bg-blue-500';
@endphp

<div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 hover-lift h-full flex flex-col">
    <!-- Gambar Misi -->
    @if($image)
    <div class="h-48 overflow-hidden">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover hover-scale">
    </div>
    @endif

    <!-- Konten -->
    <div class="p-6 flex flex-col flex-grow">
        <!-- Title dengan background color -->
        <div class="{{ $bgClass }} text-white px-4 py-3 rounded-lg mb-4 text-center hover-scale">
            <h3 class="font-bold text-lg">{{ $title }}</h3>
        </div>

        <!-- Deskripsi -->
        <p class="text-gray-600 leading-relaxed flex-grow text-justify">
            {{ $slot }}
        </p>
    </div>
</div>
