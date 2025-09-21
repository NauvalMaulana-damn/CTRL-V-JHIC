<div x-data="{ open: true }" class="fixed top-1/2 right-4 transform -translate-y-1/2 z-50">

    <!-- Toggle Button -->
    <button @click="open = !open" class="absolute -left-10 top-1/2 transform -translate-y-1/2 bg-white/30 backdrop-blur-md
               p-2 rounded-full shadow-lg hover:bg-blue-500 hover:text-white transition">
        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Sidebar -->
    <div x-show="open" class="w-[300px] h-[600px] bg-white/40 backdrop-blur-lg
                rounded-xl flex flex-col justify-between shadow-2xl border border-white/20 transition">

        <!-- Logo -->
        <div class="p-5 border-b border-gray-200/50">
            <div class="flex items-center">
                <img class="w-12 h-12" src="https://placehold.co/50x50" alt="Logo">
                <h1 class="text-xl font-bold ml-3 text-dark">School Portal</h1>
            </div>
        </div>

        <!-- Navigation Items -->
        <div class="flex-1 overflow-y-auto p-5">
            @foreach ([
            ['icon' => 'https://placehold.co/50x50', 'label' => 'Home'],
            ['icon' => 'https://placehold.co/50x50', 'label' => 'Profil Sekolah'],
            ['icon' => 'https://placehold.co/50x50', 'label' => 'Prestasi'],
            ['icon' => 'https://placehold.co/50x50', 'label' => 'Jurusan'],
            ['icon' => 'https://placehold.co/50x50', 'label' => 'Ekstrakurikuler'],
            ['icon' => 'https://placehold.co/50x50', 'label' => 'Alumni'],
            ['icon' => 'https://placehold.co/50x50', 'label' => 'Pendaftaran'],
            ] as $item)
            <div class="menu-item flex items-center py-3 px-4 mb-2 cursor-pointer
                            rounded-lg transition hover:bg-blue-500 hover:text-white hover:shadow-md">
                <img class="w-6 h-6 menu-icon" src="{{ $item['icon'] }}" alt="{{ $item['label'] }}">
                <div class="ml-4 font-semibold">{{ $item['label'] }}</div>
            </div>
            @endforeach
        </div>

        <!-- Q&A Section -->
        <div class="p-5 bg-white/30 backdrop-blur-md rounded-t-2xl border-t border-gray-200/50">
            <div class="flex items-center mb-4">
                <img class="w-8 h-8" src="https://placehold.co/50x50" alt="Q&A">
                <h2 class="text-xl font-bold ml-2 text-dark">Q&A</h2>
            </div>

            <div class="flex flex-col space-y-2">
                <div class="chat-bubble chat-right">Cara daftar gimana?</div>
                <div class="chat-bubble chat-left">Ada Jurusan Apa?</div>
                <div class="chat-bubble chat-right">Eskul nya ada apa aja?</div>
            </div>

            <button
                class="w-full mt-4 bg-dark text-white py-2 rounded-lg font-semibold flex items-center justify-center hover:bg-orange-500 transition">
                Selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </div>
    </div>
</div>
