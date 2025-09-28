<div x-data="{ open: false }" class="fixed top-1/2 right-4 transform -translate-y-1/2 z-50">

    <!-- Toggle Button -->
    <button @click="open = !open"
        class="absolute -left-10 top-1/2 transform -translate-y-1/2 bg-white/30 backdrop-blur-md
           p-2 rounded-xl shadow-lg hover:bg-customOrange hover:text-white transition">

        <!-- Panah -->
        <svg xmlns="http://www.w3.org/2000/svg" :class="open ? 'rotate-0' : 'rotate-180'"
            class="h-5 w-5 transform transition-transform duration-500 ease-in-out" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>


    <!-- Sidebar -->
    <div x-show="open" x-transition:enter="transform transition ease-in-out duration-500"
        x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transform transition ease-in-out duration-500"
        x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="translate-x-full opacity-0"
        class="w-[300px] h-[600px] bg-white/40 backdrop-blur-lg
                rounded-xl flex flex-col justify-between shadow-2xl border border-white/20">

        <!-- Logo -->
        <div class="p-5 border-b border-gray-200/50">
            <div class="flex items-center">
                <img class="w-18 h-12" src="{{ asset('assets/skariga logo 1.png') }}" alt="Logo">
                <h1 class="text-xl font-bold ml-3 text-dark">SMK PGRI 3 MALANG</h1>
            </div>
        </div>

        <!-- Navigation Items -->
        <div class="flex-1 overflow-y-auto p-5">
            @foreach ([
                ['icon' => asset('assets/home (1).png'), 'label' => 'Home', 'href' => '/'],
                ['icon' => asset('assets/trophy.png'), 'label' => 'Prestasi', 'href' => '/prestasi'],
                ['icon' => asset('assets/major.png'), 'label' => 'Jurusan', 'href' => '#'],
                ['icon' => asset('assets/extra.png'), 'label' => 'Ekstrakurikuler', 'href' => '/ekskul'],
                ['icon' => asset('assets/grad.png'), 'label' => 'Alumni', 'href' => '/alumni'],
                ['icon' => asset('assets/join.png'), 'label' => 'Pendaftaran', 'href' => '#'],
                ['icon' => asset('assets/profil.png'), 'label' => 'Profil Sekolah', 'href' => '/profil']
                ] as $item)
                <div
                    class="menu-item flex items-center py-3 px-4 mb-2 cursor-pointer
                            rounded-lg transition hover:bg-customBlue hover:text-white hover:shadow-md">
                    <img class="w-6 h-6 menu-icon" src="{{ $item['icon'] }}" alt="{{ $item['label'] }}">
                    <a class="ml-4 font-semibold" href="{{ $item['href'] }}">{{ $item['label'] }}</a>
                </div>
            @endforeach
            <!-- Q&A Section -->
            {{-- <div class="p-5 bg-white/30 backdrop-blur-md rounded-t-2xl border-t border-gray-200/50 font-[Poppins]"> --}}
                <div class="flex flex-col items-center mb-4">
                    <img class="w-8 h-8" src="{{ asset('assets/faq.png') }}" alt="FAQ">
                    <h2 class="text-xl font-bold ml-2 text-dark text-center">FAQ</h2>
                </div>

                <div class="flex flex-col space-y-3 font-semibold">
                    <div
                        class="self-end bg-gray-300 text-gray-800 text-sm px-2.5 py-1.5 rounded-2xl rounded-br-none max-w-[75%]">
                        Cara daftar gimana?
                    </div>
                    <div
                        class="self-start bg-gray-300 text-gray-800 text-sm px-2.5 py-1.5 rounded-2xl rounded-bl-none max-w-[75%]">
                        Ada Jurusan Apa?
                    </div>
                    <div
                        class="self-end bg-gray-300 text-gray-800 text-sm px-2.5 py-1.5 rounded-2xl rounded-br-none max-w-[75%]">
                        Eskul nya ada apa aja?
                    </div>
                </div>
        <!-- Q&A Section -->
        <div class="p-5 bg-white/30 backdrop-blur-md rounded-t-2xl border-t border-gray-200/50">
            <div class="flex items-center mb-4">
                <img class="w-8 h-8" src="{{ asset('assets/faq.png') }}" alt="FAQ">
                <h2 class="text-xl font-bold ml-2 text-dark">FAQ</h2>
            </div>

            <div class="flex flex-col space-y-2">
                <div class="chat-bubble chat-right">Cara daftar gimana?</div>
                <div class="chat-bubble chat-left">Ada Jurusan Apa?</div>
                <div class="chat-bubble chat-right">Eskul nya ada apa aja?</div>
            </div>

                <button
                    class="w-fit mx-auto mt-5 bg-black text-white text-sm px-4 py-1.5 rounded-full font-medium flex items-center justify-center hover:bg-[#FF885B] transition">
                    Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 ml-1.5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
        </div>


    </div>

</div>
</div>
