<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMK PGRI 3 MALANG')</title>

    <!-- CSS Libraries -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Tailwind Config -->
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    customRed: '#FD5353',
                    customOrange: '#E17626',
                    customBlue: '#2492D1',
                    customPink: '#FD467E',
                    customInsta: '#E1306C',
                    darkGray: '#222325',
                },
                fontFamily: {
                    poppins: ['Poppins', 'sans-serif'],
                    inter: ['Inter', 'sans-serif'],
                }
            }
        }
    }
    </script>

    <!-- Custom Styles -->
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        scroll-behavior: smooth;
    }

    .gradient-overlay {
        background: linear-gradient(180deg, rgba(217, 217, 217, 0) 0%, black 100%);
    }

    /* ... other styles ... */
    </style>
</head>

<body class="bg-[#F8F8F8] overflow-x-hidden">
    @yield('content')

    <!-- JS Libraries -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Swiper
        if (document.querySelector('.mySwiper')) {
            new Swiper('.mySwiper', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                autoplay: {
                    delay: 5000
                },
            });
        }

        // Mobile menu toggle
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');

        if (hamburger && navMenu) {
            hamburger.addEventListener('click', () => {
                hamburger.classList.toggle('active');
                navMenu.classList.toggle('active');
            });
        }
    });
    </script>

    @yield('scripts')
</body>

</html>
