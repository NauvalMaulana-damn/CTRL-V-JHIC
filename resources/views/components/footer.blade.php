<footer class="bg-darkGray text-white py-12 mt-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8 justify-between">
            <!-- School Info -->
            <div class="w-full md:w-1/4">
                <img class="h-16 mb-4" src="{{ asset('assets/skariga logo 1.png') }}" alt="School Logo">
                <p class="text-[#B9B9B9] text-lg font-bold mb-2">Success By Discipline</p>
                <div class="h-px w-full bg-gray-700 mb-4"></div>

                <div class="flex items-start mb-4">
                    <i class="fas fa-phone-alt text-gray-500 mt-1 mr-2"></i>
                    <span class="text-[#828282] text-sm">(0341) 554383</span>
                </div>

                <div class="flex items-start mb-4">
                    <i class="fab fa-whatsapp text-gray-500 mt-1 mr-2"></i>
                    <a href="https://wa.me/6282133000370" class="text-[#828282] text-sm underline">+62 821-3300-0370</a>
                </div>

                <div class="flex items-start">
                    <i class="fas fa-envelope text-gray-500 mt-1 mr-2"></i>
                    <a href="mailto:mail.smkpgri3malang@gmail.com" class="text-[#828282] text-sm underline">
                        mail.smkpgri3malang@gmail.com
                    </a>
                </div>
            </div>

            <!-- About School -->
            <div class="w-full md:w-1/4">
                <h3 class="text-[#B9B9B9] text-xl font-bold mb-4">Tentang Sekolah</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-[#828282] hover:text-white transition">Beranda</a></li>
                    <li><a href="/profil" class="text-[#828282] hover:text-white transition">Profil Sekolah</a></li>
                    <li><a href="#" class="text-[#828282] hover:text-white transition">Jurusan</a></li>
                    <li><a href="#" class="text-[#828282] hover:text-white transition">Prestasi</a></li>
                </ul>
            </div>

            <!-- Information & Services -->
            <div class="w-full md:w-1/4">
                <h3 class="text-[#B9B9B9] text-xl font-bold mb-4">Informasi & Layanan</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-[#828282] hover:text-white transition">Ekstrakurikuler</a></li>
                    <li><a href="#" class="text-[#828282] hover:text-white transition">Alumni</a></li>
                    <li><a href="#" class="text-[#828282] hover:text-white transition">Pendaftaran</a></li>
                </ul>
            </div>

            <!-- Social Media & Map -->
            <div class="w-full md:w-1/4">
                <h3 class="text-[#B9B9B9] text-xl font-bold mb-4">Ikuti Kami</h3>
                <div class="flex space-x-4 mb-6">
                    <a href="https://www.facebook.com/SKARIGA/?locale=id_ID"
                        class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/skariga_official/"
                        class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-customInsta transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCGGVdb_Wh1lvn8HIoMKdiLA"
                        class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-red-600 transition">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://x.com/smkpgri3mlg"
                        class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-400 transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>

                <!-- Google Maps -->
                <div class="rounded-lg overflow-hidden h-[350px] w-full mb-4">
                    <div class="mapouter" style="position:relative; text-align:right; width:500px; height:450px;">
                        <div class="gmap_canvas"
                            style="overflow:hidden; background:none!important; width:376px; height:350px;">
                            <iframe title="SMK PGRI 3 MALANG" width="100%" height="100%"
                                style="border:1px; border-radius: 12px;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://maps.google.com/maps?width=550&amp;height=150&amp;hl=en&amp;q=smk pgri 3 malang&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        </div>

                        <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                        }

                        .gmap_canvas iframe {
                            width: 100%;
                            height: 100%;
                        }

                        .mapouter a {
                            display: block;
                            font-size: 0.85em;
                            text-align: center;
                            padding: 5px 0;
                            color: #6c757d;
                            text-decoration: none;
                        }

                        .gme-generated-link {
                            display: none !important;
                        }
                        </style>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-500">
            <p>© 2025 SMK PGRI 3 Malang. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
// Wait for page to fully load
window.addEventListener('load', function() {
    // Hide loading animation
    document.getElementById('loading').style.opacity = '0';
    setTimeout(function() {
        document.getElementById('loading').style.display = 'none';
    }, 1);

    // Initialize components
    initMobileMenu();
});

// Mobile menu functionality
function initMobileMenu() {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            this.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
    }
}

// Add hover effects to department cards
const departmentCards = document.querySelectorAll('.department-card');
departmentCards.forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-5px)';
        this.style.boxShadow = '0px 15px 35px rgba(0, 0, 0, 0.3)';
    });

    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = '0px 10px 30px rgba(0, 0, 0, 0.25)';
    });
});

// Swiper JS Initializeconst swiper = new Swiper('.mySwiper', {
const swiper = new Swiper('.mySwiper', {
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
</script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
