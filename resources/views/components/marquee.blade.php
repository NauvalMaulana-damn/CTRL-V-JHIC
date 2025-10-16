{{-- resources/views/components/marquee.blade.php --}}
@props(['marquees'])

<div class="py-4 overflow-hidden rounded-lg mb-8 bg-white">
    <div class="w-[200%] flex animate-scroll-right">
        <div class="flex space-x-8 md:space-x-12 pr-12">
            <!-- First Wave Logos -->
            @foreach ($marquees as $marquee)
            <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block"
                src="{{ asset('storage/' . $marquee->gambar) }}" alt="{{ $marquee->nama }}">
            @endforeach

            <!-- Duplicated Logos -->
            @foreach ($marquees as $marquee)
            <img class="h-6 md:h-10 max-w-[100px] object-contain inline-block"
                src="{{ asset('storage/' . $marquee->gambar) }}" alt="{{ $marquee->nama }}">
            @endforeach
        </div>
    </div>
</div>

<style>
@keyframes scroll-right {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-50%);
    }
}

.animate-scroll-right {
    animation: scroll-right 25s linear infinite;
}
</style>
