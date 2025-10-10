@props(['title', 'image'])
<div
    class="w-[400px] h-[390px] pb-5 shrink-0 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 snap-start">
    <img src="{{ asset('assets/' . $image) }}"
        alt="{{ $title }}" class="h-40 w-full object-cover" />
    <div class="p-4">
        <h4 class="font-bold text-lg mb-1">{{ $title }}</h4>
        <div class="w-full h-2 bg-yellow-400 mb-2"></div>
        <p class="text-sm text-gray-600 leading-relaxed text-justify">{{ $slot }}</p>
    </div>
</div>
