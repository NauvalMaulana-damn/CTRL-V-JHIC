@props(['image', 'title', ''])
<div class="group cursor-pointer">
    <img width="100%" height="100%" class="w-full h-40 object-cover rounded-lg mb-2 group-hover:opacity-90 transition"
        src="{{ asset('assets/' . $image) }}" alt="{{ $title }}">
    <p class="text-sm font-semibold group-hover:text-customOrange transition">{{ $slot }}</p>
</div>
