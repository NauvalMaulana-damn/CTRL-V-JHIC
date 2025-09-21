<script>
tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: '#3B82F6',
                secondary: '#2563EB',
                dark: '#1E293B',
            },
            boxShadow: {
                'sidebar': '0px 10px 30px 0px rgba(0,0,0,0.25)',
            }
        }
    }
}
</script>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background-color: #f1f5f9;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.sidebar-toggle {
    position: fixed;
    top: 20px;
    left: 20px;
    z-index: 1000;
    background: #3B82F6;
    color: white;
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.sidebar {
    transition: transform 0.3s ease-in-out;
}

@media (max-width: 1024px) {
    .sidebar {
        transform: translateX(-100%);
        position: fixed;
        z-index: 999;
        height: 100vh;
        top: 0;
        left: 0;
    }

    .sidebar.active {
        transform: translateX(0);
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 998;
        display: none;
    }

    .overlay.active {
        display: block;
    }
}

.menu-item {
    transition: all 0.2s ease;
}

.menu-item:hover {
    background-color: #3B82F6;
    color: white;
    border-radius: 8px;
}

.menu-item:hover .menu-icon {
    filter: brightness(0) invert(1);
}

.chat-bubble {
    border-radius: 20px;
    padding: 12px 18px;
    max-width: 80%;
    margin-bottom: 16px;
}

.chat-left {
    background: #E5E7EB;
    border-top-left-radius: 4px;
    color: #374151;
    align-self: flex-start;
}

.chat-right {
    background: #3B82F6;
    color: white;
    border-top-right-radius: 4px;
    align-self: flex-end;
}
</style>
</head>

<body>
    <!-- Toggle button for mobile -->
    <button class="sidebar-toggle lg:hidden" onclick="toggleSidebar()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>

    <!-- Overlay for mobile -->
    <div class="overlay" onclick="toggleSidebar()"></div>

    <!-- Sidebar Component -->
    <div class="sidebar w-[325px] h-[763px] relative shadow-sidebar bg-white">
        <!-- Logo -->
        <div class="p-5 border-b border-gray-200">
            <div class="flex items-center">
                <img class="w-12 h-12" src="https://placehold.co/50x50" alt="Logo">
                <h1 class="text-xl font-bold ml-3 text-dark">School Portal</h1>
            </div>
        </div>

        <!-- Navigation Items -->
        <div class="p-5">
            <div class="menu-item flex items-center py-3 px-4 mb-2">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Home">
                <div class="ml-4 text-dark font-semibold">Home</div>
            </div>

            <div class="menu-item flex items-center py-3 px-4 mb-2">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Profile">
                <div class="ml-4 text-dark font-semibold">Profil Sekolah</div>
            </div>

            <div class="menu-item flex items-center py-3 px-4 mb-2">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Achievement">
                <div class="ml-4 text-dark font-semibold">Prestasi</div>
            </div>

            <div class="menu-item flex items-center py-3 px-4 mb-2">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Majors">
                <div class="ml-4 text-dark font-semibold">Jurusan</div>
            </div>

            <div class="menu-item flex items-center py-3 px-4 mb-2">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Extracurricular">
                <div class="ml-4 text-dark font-semibold">Ekstrakurikuler</div>
            </div>

            <div class="menu-item flex items-center py-3 px-4 mb-2">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Alumni">
                <div class="ml-4 text-dark font-semibold">Alumni</div>
            </div>

            <div class="menu-item flex items-center py-3 px-4 mb-2">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Registration">
                <div class="ml-4 text-dark font-semibold">Pendaftaran</div>
            </div>
        </div>

        <!-- Q&A Section -->
        <div class="absolute bottom-0 left-0 right-0 p-5 bg-gray-50 rounded-t-2xl">
            <div class="flex items-center mb-4">
                <img class="w-8 h-8" src="https://placehold.co/50x50" alt="Q&A">
                <h2 class="text-xl font-bold ml-2 text-dark">Q&A</h2>
            </div>

            <div class="flex flex-col">
                <div class="chat-bubble chat-right">
                    Cara daftar gimana?
                </div>

                <div class="chat-bubble chat-left">
                    Ada Jurusan Apa?
                </div>

                <div class="chat-bubble chat-right">
                    Eskul nya ada apa aja?
                </div>
            </div>

            <button
                class="w-full mt-4 bg-dark text-white py-2 rounded-lg font-semibold flex items-center justify-center">
                Selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </div>
    </div>

    <script>
    function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar');
        const overlay = document.querySelector('.overlay');

        sidebar.classList.toggle('active');
        overlay.classList.toggle('active');

        // Prevent body scrolling when sidebar is open
        if (sidebar.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = 'auto';
        }
    }

    // Close sidebar when pressing Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            const sidebar = document.querySelector('.sidebar');
            const overlay = document.querySelector('.overlay');

            if (sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        }
    });
    </script>
