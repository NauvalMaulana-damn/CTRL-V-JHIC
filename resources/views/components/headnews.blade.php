@props(['title', 'image1', 'image2', 'image3'])
<section class="swiper-slide relative w-full h-full">
    <img src="{{ asset('assets/' . $image1) }}" alt="{{ $image1 }}"
        class="headnews-img1 w-full h-[40vh] sm:h-[50vh] md:h-[60vh] lg:h-[70vh] object-cover" />
    <div class="absolute bottom-0 left-0 w-full h-1/2 gradient-overlay"></div>
    <div class="absolute bottom-6 left-5 md:left-8 text-white max-w-4xl">
        <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2">
            {{ $title }}
        </h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold">
            {{ $slot }}
        </p>
    </div>
</section>

<section class="swiper-slide relative w-full h-full">
    <img src="{{ asset('assets/' . $image2) }}" alt="{{ $image2 }}"
        class="headnews-img2 w-full h-[40vh] sm:h-[50vh] md:h-[60vh] lg:h-[70vh] object-cover" />
    <div class="absolute bottom-0 left-0 w-full h-1/2 gradient-overlay"></div>
    <div class="absolute bottom-6 left-5 md:left-8 text-white max-w-4xl">
        <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2">
            {{ $title }}
        </h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold">
            {{ $slot }}
        </p>
    </div>
</section>

<section class="swiper-slide relative w-full h-full">
    <img src="{{ asset('assets/' . $image3) }}" alt="{{ $image3 }}"
        class="headnews-img3 w-full h-[40vh] sm:h-[50vh] md:h-[60vh] lg:h-[70vh] object-cover" />
    <div class="absolute bottom-0 left-0 w-full h-1/2 gradient-overlay"></div>
    <div class="absolute bottom-6 left-5 md:left-8 text-white max-w-4xl">
        <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2">
            {{ $title }}
        </h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold">
            {{ $slot }}
        </p>
    </div>
</section>
<div {{ $attributes->merge(['class' => 'relative w-full overflow-hidden rounded-xl']) }}>

</div>
