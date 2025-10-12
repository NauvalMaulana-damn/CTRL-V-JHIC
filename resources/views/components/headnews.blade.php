@props(['image1', 'image2', 'image3'])

<!-- Hanya gambar-gambar yang di-swipe -->
<section class="swiper-slide">
    <div class="absolute inset-0 bg-gradient-to-t from-transparent via-black/5 to-black/30"></div>
    <img src="{{ asset('assets/' . $image1) }}" alt="{{ $image1 }}"
        class="headnews-img1 w-full h-[40vh] sm:h-[50vh] md:h-[60vh] lg:h-[70vh] object-cover" />
    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/15 to-transparent"></div>
</section>

<section class="swiper-slide">
    <div class="absolute inset-0 bg-gradient-to-t from-transparent via-black/5 to-black/30"></div>
    <img src="{{ asset('assets/' . $image2) }}" alt="{{ $image2 }}"
        class="headnews-img2 w-full h-[40vh] sm:h-[50vh] md:h-[60vh] lg:h-[70vh] object-cover" />
    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/15 to-transparent"></div>
</section>

<section class="swiper-slide">
    <div class="absolute inset-0 bg-gradient-to-t from-transparent via-black/5 to-black/30"></div>
    <img src="{{ asset('assets/' . $image3) }}" alt="{{ $image3 }}"
        class="headnews-img3 w-full h-[40vh] sm:h-[50vh] md:h-[60vh] lg:h-[70vh] object-cover" />
    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/15 to-transparent"></div>
</section>
