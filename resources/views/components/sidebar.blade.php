<script>
tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: {
                    50: '#eff6ff',
                    100: '#dbeafe',
                    500: '#3B82F6',
                    600: '#2563EB',
                    700: '#1D4ED8',
                },
                dark: '#1E293B',
            },
            boxShadow: {
                'sidebar': '0px 10px 30px 0px rgba(0,0,0,0.25)',
                'glass': '0 8px 32px 0 rgba(31, 38, 135, 0.37)',
            },
            backdropBlur: {
                xs: '2px',
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
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.glass-effect {
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.18);
}

.toggle-button {
    position: fixed;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    width: 40px;
    height: 40px;
    border-radius: 50% 0 0 50%;
    background: rgba(59, 130, 246, 0.85);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: -2px 0 10px rgba(0, 0, 0, 0.15);
    z-index: 100;
    transition: all 0.3s ease;
}

.toggle-button:hover {
    background: rgba(37, 99, 235, 0.9);
    width: 45px;
}

.sidebar {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
}

@media (max-width: 768px) {
    .sidebar {
        transform: translateX(100%);
        opacity: 0;
        pointer-events: none;
    }

    .sidebar.active {
        transform: translateX(0);
        opacity: 1;
        pointer-events: all;
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 48;
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
    transform: translateX(5px);
}

.menu-item:hover .menu-icon {
    filter: brightness(0) invert(1);
}

.chat-bubble {
    border-radius: 20px;
    padding: 12px 18px;
    max-width: 80%;
    margin-bottom: 16px;
    transition: all 0.2s ease;
    cursor: pointer;
}

.chat-bubble:hover {
    transform: scale(1.03);
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

.see-more-btn {
    transition: all 0.3s ease;
}

.see-more-btn:hover {
    background-color: #1E293B;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.see-more-btn:active {
    transform: translateY(0);
}
</style>
</head>

<body>
    <!-- Toggle button -->
    <div class="toggle-button lg:hidden" onclick="toggleSidebar()">
        <i class="fas fa-chevron-left text-white text-lg transition-transform duration-300" id="toggle-icon"></i>
    </div>

    <!-- Overlay for mobile -->
    <div class="overlay" onclick="toggleSidebar()"></div>

    <!-- Sidebar Component -->
    <div
        class="sidebar glass-effect w-[325px] h-[763px] rounded-2xl flex flex-col justify-between z-50 relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute -top-20 -left-20 w-40 h-40 rounded-full bg-blue-100 opacity-50"></div>
        <div class="absolute -bottom-20 -right-20 w-40 h-40 rounded-full bg-blue-200 opacity-50"></div>

        <!-- Logo -->
        <div class="p-5 border-b border-gray-200 relative z-10">
            <div class="flex items-center">
                <img class="w-12 h-12" src="https://placehold.co/50x50" alt="Logo">
                <h1 class="text-xl font-bold ml-3 text-dark">School Portal</h1>
            </div>
        </div>

        <!-- Navigation Items -->
        <div class="flex-1 overflow-y-auto p-5 relative z-10">
            <div class="menu-item flex items-center py-3 px-4 mb-2 cursor-pointer">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Home">
                <div class="ml-4 text-dark font-semibold">Home</div>
            </div>

            <div class="menu-item flex items-center py-3 px-4 mb-2 cursor-pointer">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Profile">
                <div class="ml-4 text-dark font-semibold">Profil Sekolah</div>
            </div>

            <div class="menu-item flex items-center py-3 px-4 mb-2 cursor-pointer">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Achievement">
                <div class="ml-4 text-dark font-semibold">Prestasi</div>
            </div>

            <div class="menu-item flex items-center py-3 px-4 mb-2 cursor-pointer">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Majors">
                <div class="ml-4 text-dark font-semibold">Jurusan</div>
            </div>

            <div class="menu-item flex items-center py-3 px-4 mb-2 cursor-pointer">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Extracurricular">
                <div class="ml-4 text-dark font-semibold">Ekstrakurikuler</div>
            </div>

            <div class="menu-item flex items-center py-3 px-4 mb-2 cursor-pointer">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Alumni">
                <div class="ml-4 text-dark font-semibold">Alumni</div>
            </div>

            <div class="menu-item flex items-center py-3 px-4 mb-2 cursor-pointer">
                <img class="w-6 h-6 menu-icon" src="https://placehold.co/50x50" alt="Registration">
                <div class="ml-4 text-dark font-semibold">Pendaftaran</div>
            </div>
        </div>

        <!-- Q&A Section -->
        <div class="p-5 bg-gray-50/70 rounded-t-2xl relative z-10">
            <div class="flex items-center mb-4">
                <img class="w-8 h-8" src="https://placehold.co/50x50" alt="Q&A">
                <h2 class="text-xl font-bold ml-2 text-dark">Q&A</h2>
            </div>

            <div class="flex flex-col">
                <div class="chat-bubble chat-right">Cara daftar gimana?</div>

                <div class="chat-bubble chat-left">Ada Jurusan Apa?</div>

                <div class="chat-bubble chat-right">Eskul nya ada apa aja?</div>
            </div>

            <button
                class="see-more-btn w-full mt-4 bg-dark text-white py-2 rounded-lg font-semibold flex items-center justify-center">
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
        const toggleIcon = document.getElementById('toggle-icon');

        sidebar.classList.toggle('active');
        overlay.classList.toggle('active');

        if (sidebar.classList.contains('active')) {
            toggleIcon.classList.remove('fa-chevron-left');
            toggleIcon.classList.add('fa-chevron-right');
            document.body.style.overflow = 'hidden';
        } else {
            toggleIcon.classList.remove('fa-chevron-right');
            toggleIcon.classList.add('fa-chevron-left');
            document.body.style.overflow = 'auto';
        }
    }

    // Close sidebar when pressing Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            const sidebar = document.querySelector('.sidebar');
            const overlay = document.querySelector('.overlay');
            const toggleIcon = document.getElementById('toggle-icon');

            if (sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
                toggleIcon.classList.remove('fa-chevron-right');
                toggleIcon.classList.add('fa-chevron-left');
                document.body.style.overflow = 'auto';
            }
        }
    });

    // Add click effects to menu items
    document.querySelectorAll('.menu-item').forEach(item => {
        item.addEventListener('click', function() {
            this.style.transform = 'translateX(0)';
            setTimeout(() => {
                this.style.transform = '';
            }, 200);
        });
    });
    </script>
