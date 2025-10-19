<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title', 'Dashboard')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ $assetBase }}/assets/skariga300rbg.png" type="image/x-icon">
</head>

<body class="bg-gray-100">
    <!-- Mobile Menu Button -->
    <div class="lg:hidden">
        <button id="mobileMenuButton" class="fixed top-4 left-4 z-50 bg-gray-800 text-white p-2 rounded-md shadow-lg">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <img class="w-12 h-8 md:w-16 md:h-12 lg:w-24 lg:h-16 object-contain"
                        src="{{ $assetBase }}/assets/skariga logo 1.png" alt="Logo SMK PGRI 3 Malang">
                    <h1 class="text-lg md:text-xl font-semibold text-gray-800 ml-2 md:ml-4">SKARIGA Admin</h1>
                </div>

                <div class="flex items-center space-x-2 md:space-x-4">
                    <!-- User info dengan badge role -->
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-medium text-gray-700">{{ Auth::user()->username }}</p>
                        <div class="flex items-center space-x-1 md:space-x-2">
                            <span class="text-xs px-2 py-1 rounded-full
                                @if(Auth::user()->isSuperadmin()) bg-purple-100 text-purple-800
                                @elseif(Auth::user()->isAdmin()) bg-blue-100 text-blue-800
                                @elseif(Auth::user()->isEditor()) bg-green-100 text-green-800
                                @else bg-gray-100 text-gray-700
                                @endif">
                                {{ Auth::user()->role }}
                            </span>
                            @if(!Auth::user()->verifyRoleKey())
                            <span class="text-xs px-2 py-1 rounded-full bg-red-100 text-red-800">
                                Invalid Key
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- Mobile user info -->
                    <div class="sm:hidden text-right">
                        <span class="text-xs px-2 py-1 rounded-full
                            @if(Auth::user()->isSuperadmin()) bg-purple-100 text-purple-800
                            @elseif(Auth::user()->isAdmin()) bg-blue-100 text-blue-800
                            @elseif(Auth::user()->isEditor()) bg-green-100 text-green-800
                            @else bg-gray-100 text-gray-700
                            @endif">
                            {{ substr(Auth::user()->role, 0, 1) }}
                        </span>
                    </div>

                    <!-- Logout form -->
                    <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit"
                            class="bg-red-600 text-white px-2 py-1 md:px-3 md:py-1 rounded text-sm hover:bg-red-700 transition"
                            onclick="return confirm('Yakin ingin logout?')">
                            <i class="fas fa-sign-out-alt md:mr-1"></i>
                            <span class="hidden md:inline">Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar Navigation (Desktop) -->
        <nav class="bg-gray-800 hidden lg:block lg:w-64 xl:w-72 h-screen sticky top-0 overflow-y-auto">
            <div class="p-4">
                <div class="space-y-1">
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700 text-white' : '' }}">
                        <i class="fas fa-tachometer-alt w-5 mr-3"></i>
                        Dashboard
                    </a>

                    <!-- Menu untuk semua role -->
                    <a href="{{ route('admin.berita.index') }}"
                        class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.berita.*') ? 'bg-gray-700 text-white' : '' }}">
                        <i class="fas fa-newspaper w-5 mr-3"></i>
                        Berita
                    </a>

                    <a href="{{ route('admin.profil.index') }}"
                        class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.profil.*') ? 'bg-gray-700 text-white' : '' }}">
                        <i class="fas fa-school w-5 mr-3"></i>
                        Profil
                    </a>

                    <a href="{{ route('admin.jurusan.index') }}"
                        class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.jurusan.*') ? 'bg-gray-700 text-white' : '' }}">
                        <i class="fas fa-list w-5 mr-3"></i>
                        Jurusan
                    </a>

                    <a href="{{ route('admin.ekskul.index') }}"
                        class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.ekskul.*') ? 'bg-gray-700 text-white' : '' }}">
                        <i class="fas fa-football-ball w-5 mr-3"></i>
                        Ekstrakurikuler
                    </a>

                    <a href="{{ route('admin.prestasi.index') }}"
                        class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.prestasi.*') ? 'bg-gray-700 text-white' : '' }}">
                        <i class="fas fa-trophy w-5 mr-3"></i>
                        Prestasi
                    </a>

                    <a href="{{ route('admin.alumni.index') }}"
                        class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.alumni.*') ? 'bg-gray-700 text-white' : '' }}">
                        <i class="fas fa-graduation-cap w-5 mr-3"></i>
                        Alumni
                    </a>

                    <a href="{{ route('admin.pendaftaran.index') }}"
                        class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.pendaftaran.*') ? 'bg-gray-700 text-white' : '' }}">
                        <i class="fas fa-user-graduate w-5 mr-3"></i>
                        Pendaftaran
                    </a>

                    <a href="{{ route('admin.marquee.index') }}"
                        class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.marquee.*') ? 'bg-gray-700 text-white' : '' }}">
                        <i class="fas fa-scroll w-5 mr-3"></i>
                        Marquee
                    </a>

                    <!-- Hanya SUPERADMIN yang bisa melihat Logs dan User Management -->
                    @if(Auth::user()->canViewLogs())
                    <div class="border-t border-gray-700 pt-2 mt-2">
                        <p class="text-xs text-gray-400 px-3 py-1 uppercase tracking-wider">Superadmin</p>
                        <a href="{{ route('admin.logs.index') }}"
                            class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.logs.*') ? 'bg-gray-700 text-white' : '' }}">
                            <i class="fas fa-history w-5 mr-3"></i>
                            Activity Logs
                        </a>

                        <a href="{{ route('admin.users.index') }}"
                            class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.users.*') ? 'bg-gray-700 text-white' : '' }}">
                            <i class="fas fa-users-cog w-5 mr-3"></i>
                            User Management
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </nav>

        <!-- Mobile Navigation Menu -->
        <div id="mobileMenu"
            class="lg:hidden fixed inset-0 z-40 transform -translate-x-full transition-transform duration-300 ease-in-out">
            <div class="fixed inset-0 bg-black bg-opacity-50" id="mobileMenuBackdrop"></div>
            <div class="relative bg-gray-800 w-64 h-full overflow-y-auto">
                <div class="p-4">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-white text-lg font-semibold">Menu</h2>
                        <button id="closeMobileMenu" class="text-gray-300 hover:text-white">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>

                    <div class="space-y-1">
                        <a href="{{ route('admin.dashboard') }}"
                            class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700 text-white' : '' }}">
                            <i class="fas fa-tachometer-alt w-6 mr-3"></i>
                            Dashboard
                        </a>

                        <a href="{{ route('admin.berita.index') }}"
                            class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('admin.berita.*') ? 'bg-gray-700 text-white' : '' }}">
                            <i class="fas fa-newspaper w-6 mr-3"></i>
                            Berita
                        </a>

                        <a href="{{ route('admin.profil.index') }}"
                            class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('admin.profil.*') ? 'bg-gray-700 text-white' : '' }}">
                            <i class="fas fa-school w-6 mr-3"></i>
                            Profil
                        </a>

                        <a href="{{ route('admin.jurusan.index') }}"
                            class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('admin.jurusan.*') ? 'bg-gray-700 text-white' : '' }}">
                            <i class="fas fa-list w-6 mr-3"></i>
                            Jurusan
                        </a>

                        <a href="{{ route('admin.ekskul.index') }}"
                            class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('admin.ekskul.*') ? 'bg-gray-700 text-white' : '' }}">
                            <i class="fas fa-football-ball w-6 mr-3"></i>
                            Ekstrakurikuler
                        </a>

                        <a href="{{ route('admin.prestasi.index') }}"
                            class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('admin.prestasi.*') ? 'bg-gray-700 text-white' : '' }}">
                            <i class="fas fa-trophy w-6 mr-3"></i>
                            Prestasi
                        </a>

                        <a href="{{ route('admin.alumni.index') }}"
                            class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('admin.alumni.*') ? 'bg-gray-700 text-white' : '' }}">
                            <i class="fas fa-graduation-cap w-6 mr-3"></i>
                            Alumni
                        </a>

                        <a href="{{ route('admin.pendaftaran.index') }}"
                            class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('admin.pendaftaran.*') ? 'bg-gray-700 text-white' : '' }}">
                            <i class="fas fa-user-graduate w-6 mr-3"></i>
                            Pendaftaran
                        </a>

                        <a href="{{ route('admin.marquee.index') }}"
                            class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('admin.marquee.*') ? 'bg-gray-700 text-white' : '' }}">
                            <i class="fas fa-scroll w-6 mr-3"></i>
                            Marquee
                        </a>

                        @if(Auth::user()->canViewLogs())
                        <div class="border-t border-gray-700 pt-3 mt-3">
                            <p class="text-xs text-gray-400 px-3 py-2 uppercase tracking-wider">Superadmin</p>
                            <a href="{{ route('admin.logs.index') }}"
                                class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('admin.logs.*') ? 'bg-gray-700 text-white' : '' }}">
                                <i class="fas fa-history w-6 mr-3"></i>
                                Activity Logs
                            </a>

                            <a href="{{ route('admin.users.index') }}"
                                class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('admin.users.*') ? 'bg-gray-700 text-white' : '' }}">
                                <i class="fas fa-users-cog w-6 mr-3"></i>
                                User Management
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main class="flex-1 min-w-0">
            <!-- Flash Messages -->
            @if(session('success'))
            <div class="max-w-7xl mx-auto px-3 sm:px-4 lg:px-8 mt-4">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded text-sm">
                    <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
                </div>
            </div>
            @endif

            @if(session('error'))
            <div class="max-w-7xl mx-auto px-3 sm:px-4 lg:px-8 mt-4">
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded text-sm">
                    <i class="fas fa-exclamation-circle mr-2"></i>{{ session('error') }}
                </div>
            </div>
            @endif

            <!-- Page Content -->
            <div class="max-w-7xl mx-auto px-3 sm:px-4 lg:px-8 py-4 lg:py-6">
                {{ $slot }}
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} Admin Panel - Logged in as
                <span class="font-semibold capitalize">{{ Auth::user()->role }}</span>
            </div>
        </div>
    </footer>

    <style>
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Hover effects */
    .hover-scale {
        transition: transform 0.3s ease;
    }

    .hover-scale:hover {
        transform: scale(1.05);
    }

    /* Custom scrollbar */
    .overflow-x-auto::-webkit-scrollbar {
        height: 6px;
    }

    .overflow-x-auto::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 3px;
    }

    .overflow-x-auto::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 3px;
    }

    .overflow-x-auto::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }

    /* Sidebar scrollbar */
    .sidebar-scroll::-webkit-scrollbar {
        width: 4px;
    }

    .sidebar-scroll::-webkit-scrollbar-track {
        background: #374151;
    }

    .sidebar-scroll::-webkit-scrollbar-thumb {
        background: #6b7280;
        border-radius: 2px;
    }
    </style>

    <script>
    // Mobile menu functionality
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMobileMenu = document.getElementById('closeMobileMenu');
        const mobileMenuBackdrop = document.getElementById('mobileMenuBackdrop');

        function openMobileMenu() {
            mobileMenu.classList.remove('-translate-x-full');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenuFunc() {
            mobileMenu.classList.add('-translate-x-full');
            document.body.style.overflow = 'auto';
        }

        mobileMenuButton.addEventListener('click', openMobileMenu);
        closeMobileMenu.addEventListener('click', closeMobileMenuFunc);
        mobileMenuBackdrop.addEventListener('click', closeMobileMenuFunc);

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMobileMenuFunc();
            }
        });

        // Close menu when clicking on menu links (optional)
        const menuLinks = document.querySelectorAll('#mobileMenu a');
        menuLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenuFunc);
        });
    });
    </script>

    <!-- Dynamic Vite Assets -->
    @vite(['resources/ts/app.ts', 'resources/css/app.css'])
</body>

</html>
