<div x-data="{ open: false }" class="fixed top-1/2 right-4 transform -translate-y-1/2 z-50">

    <!-- Anti Flicker saat Alpine belum jalan -->
    <style>
    [x-cloak] {
        display: none !important;
    }

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

    /* Area chat */
    #chatbox {
        max-height: 70vh;
        overflow-y: auto;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        background-color: #f5f7fa;
        border-radius: 12px;
    }

    /* Bubble umum */
    .bubble {
        max-width: 80%;
        padding: 0.75rem 1rem;
        border-radius: 16px;
        line-height: 1.4;
        word-wrap: break-word;
        font-size: 0.95rem;
        animation: fadeIn 0.2s ease-in;
    }

    /* Bubble user */
    .bubble.user {
        align-self: flex-end;
        background-color: #0078ff;
        color: white;
        border-bottom-right-radius: 4px;
    }

    /* Bubble bot */
    .bubble.bot {
        align-self: flex-start;
        background-color: #e5e7eb;
        color: #111827;
        border-bottom-left-radius: 4px;
    }

    /* Indikator “mengetik...” */
    .typing {
        display: inline-block;
        width: 40px;
        text-align: left;
    }

    .typing span {
        display: inline-block;
        width: 6px;
        height: 6px;
        margin: 0 1px;
        background: #999;
        border-radius: 50%;
        animation: blink 1.4s infinite both;
    }

    .typing span:nth-child(2) {
        animation-delay: 0.2s;
    }

    .typing span:nth-child(3) {
        animation-delay: 0.4s;
    }

    @keyframes blink {

        0%,
        80%,
        100% {
            opacity: 0;
        }

        40% {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(4px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    </style>

    <button @click="open = !open" class="absolute -left-16 top-1/2 transform -translate-y-1/2
        bg-gray-300/80 backdrop-blur-md border border-white/30
        w-14 h-14 rounded-2xl shadow-lg flex items-center justify-center
        transition-all duration-300 hover:bg-customOrange hover:text-white">

        <!-- Konten tombol: panah dan ikon -->
        <div class="flex items-center justify-center gap-1">
            <!-- Ikon panah -->
            <svg xmlns="http://www.w3.org/2000/svg" :class="open
                ? 'h-5 w-5 transform rotate-0 transition-transform duration-500 ease-in-out'
                : 'h-5 w-5 transform rotate-180 transition-transform duration-500 ease-in-out'" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>

            <!-- Logo -->
            <img src="{{ asset('assets/skariga logo 1.png') }}" alt="Logo" class="w-6 h-6 object-contain">
        </div>
    </button>


    <!-- Sidebar -->
    <div x-show="open" x-cloak x-transition:enter="transform transition ease-in-out duration-500"
        x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transform transition ease-in-out duration-500"
        x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="translate-x-full opacity-0" class="w-[300px] h-[600px] bg-white/80 backdrop-blur-lg rounded-xl
            flex flex-col justify-between shadow-2xl border border-white/20">

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
            <div class="menu-item flex items-center py-3 px-4 mb-2 cursor-pointer rounded-lg
                        transition hover:bg-customBlue hover:text-white hover:shadow-md">
                <img class="w-6 h-6 flex-shrink-0" src="{{ $item['icon'] }}" alt="{{ $item['label'] }}">
                <a href="{{ $item['href'] }}" class="ml-4 font-semibold truncate">
                    {{ $item['label'] }}
                </a>
            </div>
            @endforeach

            <!-- FAQ Section -->
            <div class="flex flex-col items-center mt-6">
                <img class="w-8 h-8" src="{{ asset('assets/faq.png') }}" alt="FAQ">
                <h2 class="text-xl font-bold text-dark text-center mt-1">QnA</h2>
            </div>

            <!-- Chat Box -->
            <!-- Chat Container -->
            <div id="chatbox" class="h-80 overflow-y-auto border rounded-lg p-3 bg-gray-50 text-sm flex flex-col gap-2 shadow-md">
            </div>

            <!-- Chat Form -->
            <form id="chatForm" class="flex max-w-full mt-2 h-24">
                <textarea id="message" name="message" placeholder="Tulis pertanyaan kamu..." class="flex-grow border w-full rounded-l-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300
            resize-none overflow-y-auto text-sm" rows="1" required></textarea>

                <button type="submit" class="bg-blue-500 text-white px-4 rounded-r-lg hover:bg-blue-600 transition">
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

        appendMessage('user', message);
        messageInput.value = '';

        const typingBubble = appendTyping();

        const res = await fetch("{{ route('chat.ask') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                message
            })
        });

        const data = await res.json();

        typingBubble.remove(); // hapus "mengetik..."
        appendMessage('bot', data.reply);
    });

    function appendMessage(sender, text) {
        const div = document.createElement('div');
        div.classList.add('bubble', sender);
        div.innerHTML = text;
        chatbox.appendChild(div);
        chatbox.scrollTop = chatbox.scrollHeight;
        return div;
    }

    function appendTyping() {
        const typing = document.createElement('div');
        typing.classList.add('bubble', 'bot');
        typing.innerHTML = `<div class="typing"><span></span><span></span><span></span></div>`;
        chatbox.appendChild(typing);
        chatbox.scrollTop = chatbox.scrollHeight;
        return typing;
    }
    </script>
</div>
