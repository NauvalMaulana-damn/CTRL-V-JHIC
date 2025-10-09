<div
    x-data="{ open: false }"
    class="fixed top-1/2 right-4 transform -translate-y-1/2 z-50"
>

    <!-- Anti Flicker saat Alpine belum jalan -->
    <style>
        [x-cloak] { display: none !important; }
        /* Tambahan: biar teks di chat & sidebar wrap dan scroll enak */
        #chatbox {
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: pre-wrap;
            scroll-behavior: smooth;
        }
        .menu-item a {
            display: inline-block;
            width: 100%;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
    </style>

    <!-- Tombol Toggle -->
    <button
        @click="open = !open"
        class="absolute -left-10 top-1/2 transform -translate-y-1/2 bg-white/30 backdrop-blur-md
               p-2 rounded-xl shadow-lg hover:bg-customOrange hover:text-white inline-block transition"
    >
        <!-- Ikon Panah -->
        <svg xmlns="http://www.w3.org/2000/svg"
             :class="open
                ? 'h-5 w-5 transform rotate-0 transition-transform duration-500 ease-in-out'
                : 'h-5 w-5 transform rotate-180 transition-transform duration-500 ease-in-out'"
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>

        <!-- Logo kecil -->
        <img height="20" width="20" src="{{ asset('assets/skariga logo 1.png') }}" alt="skarigalogo">
    </button>

    <!-- Sidebar -->
    <div
        x-show="open"
        x-cloak
        x-transition:enter="transform transition ease-in-out duration-500"
        x-transition:enter-start="translate-x-full opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transform transition ease-in-out duration-500"
        x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="translate-x-full opacity-0"
        class="w-[300px] h-[600px] bg-white/40 backdrop-blur-lg rounded-xl
               flex flex-col justify-between shadow-2xl border border-white/20"
    >

        <!-- Header -->
        <div class="p-5 border-b border-gray-200/50">
            <div class="flex items-center">
                <img class="w-18 h-12" src="{{ asset('assets/skariga logo 1.png') }}" alt="Logo">
                <h1 class="text-xl font-bold ml-3 text-dark leading-tight">SMK PGRI 3 MALANG</h1>
            </div>
        </div>

        <!-- Konten Navigasi + Chat -->
        <div class="flex-1 overflow-y-auto p-5 space-y-4">

            <!-- Menu -->
            @foreach ([
                ['icon' => asset('assets/home (1).png'), 'label' => 'Beranda', 'href' => '/'],
                ['icon' => asset('assets/home (1).png'), 'label' => 'Berita', 'href' => '/berita'],
                ['icon' => asset('assets/profil.png'), 'label' => 'Profil', 'href' => '/profil'],
                ['icon' => asset('assets/trophy.png'), 'label' => 'Prestasi', 'href' => '/prestasi'],
                ['icon' => asset('assets/major.png'), 'label' => 'Jurusan', 'href' => '/jurusan'],
                ['icon' => asset('assets/extra.png'), 'label' => 'Ekstrakurikuler', 'href' => '/ekskul'],
                ['icon' => asset('assets/grad.png'), 'label' => 'Alumni', 'href' => '/alumni'],
                ['icon' => asset('assets/join.png'), 'label' => 'Pendaftaran', 'href' => '/pendaftaran'],
            ] as $item)
                <div
                    class="menu-item flex items-center py-3 px-4 mb-2 cursor-pointer rounded-lg
                           transition hover:bg-customBlue hover:text-white hover:shadow-md"
                >
                    <img class="w-6 h-6 flex-shrink-0" src="{{ $item['icon'] }}" alt="{{ $item['label'] }}">
                    <a href="{{ $item['href'] }}" class="ml-4 font-semibold truncate">
                        {{ $item['label'] }}
                    </a>
                </div>
            @endforeach

            <!-- FAQ Section -->
            <div class="flex flex-col items-center mt-6">
                <img class="w-8 h-8" src="{{ asset('assets/faq.png') }}" alt="FAQ">
                <h2 class="text-xl font-bold text-dark text-center mt-1">FAQ</h2>
            </div>

            <!-- Chat Box -->
            <div id="chatbox" class="h-80 overflow-y-auto border rounded-lg p-3 bg-gray-50 text-sm"></div>

            <!-- Chat Form -->
            <form id="chatForm" class="flex max-w-full">
                <input
                    type="text"
                    id="message"
                    name="message"
                    placeholder="Tulis pertanyaan kamu..."
                    class="flex-grow border text-wrap w-full rounded-l-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300"
                    required
                />
                <button
                    type="submit"
                    class="bg-blue-500 text-white px-4 rounded-r-lg hover:bg-blue-600 transition text-wrap"
                >
                    Kirim
                </button>
            </form>

        </div>
    </div>

    <!-- Script Chat -->
    <script>
        const chatForm = document.getElementById('chatForm');
        const chatbox = document.getElementById('chatbox');
        const messageInput = document.getElementById('message');

        chatForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const message = messageInput.value.trim();
            if (!message) return;

            appendMessage('🧑 Kamu', message);
            messageInput.value = '';

            appendMessage('🤖 Bot', 'Mengetik...');

            const res = await fetch("{{ route('chat.ask') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                body: JSON.stringify({ message })
            });

            const data = await res.json();
            chatbox.lastElementChild.remove(); // hapus “Mengetik...”
            appendMessage('🤖 Bot', data.reply);
        });

        function appendMessage(sender, text) {
            const div = document.createElement('div');
            div.classList.add('mb-3');
            div.innerHTML = `<strong>${sender}:</strong> <span>${text}</span>`;
            chatbox.appendChild(div);
            chatbox.scrollTop = chatbox.scrollHeight;
        }
    </script>
</div>
