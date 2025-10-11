@props(['title', 'image'])
<div class="w-full lg:w-1/3 habit-card text-white bg-customOrange hover:bg-customBlue p-5 flex flex-col transition-all duration-900 ease-in-out
                        hover:scale-105 hover:rounded-xl hover:shadow-2xl hover:z-10
                        min-h-[500px] hover:min-h-[520px] hover:self-start">
    <img width="100%" height="100%" class="w-full h-64 md:h-52 object-cover rounded-lg mb-4"
        src="{{ asset('assets/' . $image) }}" alt="{{ $title }}">
    <h3 class="text-xl md:text-2xl font-bold text-center mb-3">{{ $title }}</h3>
    <p class="text-base text-center cursor-default">
        {{ $slot }}
    </p>
</div>
