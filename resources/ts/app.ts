declare global {
    interface Window {
        Alpine: typeof Alpine;
        showNews: (id: number, title: string, desc: string, image: string) => void;
        initializeNewsSlider: () => void;
        beritas: any[]; // Ubah dari string ke any[]
    }
}

import "../css/app.css";
import Alpine from "alpinejs";
import Swiper from "swiper";
import { Autoplay, Pagination, Navigation, EffectFade } from "swiper/modules";
import { initChartGabungan } from "./chart";
import { initScrollButtons } from "./scroll";
import MicroModal from "micromodal";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/effect-fade";

// Interface untuk data berita
interface Berita {
    id: number;
    title: string;
    deskripsi: string;
    gambar: string;
}

// Variabel global
let newsSwiper: Swiper | null = null;
let allBeritas: Berita[] = [];

// ✅ Mobile menu
const initMobileMenu = (): void => {
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("navMenu");

    if (hamburger && navMenu) {
        hamburger.addEventListener("click", (): void => {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        });
    }
};

// ✅ Initialize News Slider dengan data berita
const initializeNewsSlider = (): void => {
    console.log("🔄 Initializing news slider...");

    try {
        // Ambil data berita dari window object - langsung sebagai array
        const beritasData = window.beritas;
        console.log("📊 Beritas data:", beritasData);

        if (!beritasData || !Array.isArray(beritasData)) {
            console.warn("⚠️ No valid beritas data found");
            createDefaultSlide();
            return;
        }

        allBeritas = beritasData;
        console.log(`📰 Found ${allBeritas.length} beritas`);

        if (allBeritas.length === 0) {
            console.warn("⚠️ No beritas data available");
            createDefaultSlide();
            return;
        }

        // Setup Swiper container
        const swiperWrapper = document.getElementById("x-headnews");
        if (!swiperWrapper) {
            console.error("❌ Swiper wrapper (#x-headnews) not found");
            return;
        }

        // Clear existing content
        swiperWrapper.innerHTML = "";

        // Create slides untuk setiap berita
        allBeritas.forEach((berita: Berita, index: number) => {
            const slide = document.createElement("div");
            slide.className = "swiper-slide relative w-full h-full";

            // Handle image path - check if it already has storage/ prefix
            let imagePath = berita.gambar;
            if (
                !imagePath.startsWith("storage/") &&
                !imagePath.startsWith("http")
            ) {
                imagePath = `storage/${berita.gambar}`;
            }

            slide.innerHTML = `
                <a href="berita/${berita.id}">
                    <img src="${imagePath}" alt="${berita.title}"
                        class="headnews-img w-full h-[40vh] sm:h-[50vh] md:h-[60vh] lg:h-[70vh] object-cover"
                        onerror="this.src='/assets/default.svg'"/>
                    <div class="absolute bottom-0 left-0 w-full h-1/2 gradient-overlay"></div>
                    <div class="absolute bottom-6 left-5 md:left-8 text-white max-w-4xl">
                        <h1 class="title text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2">
                            ${berita.title.toUpperCase()}
                        </h1>
                        <p class="desc text-base sm:text-lg md:text-xl lg:text-2xl font-bold mb-6 line-clamp-3">
                            ${berita.deskripsi}
                        </p>
                    </div>
                </a>
            `;
            swiperWrapper.appendChild(slide);
        });

        // Initialize Swiper
        initializeSwiperInstance();

        // Set active pertama di sidebar setelah Swiper ready
        setTimeout(() => {
            setActiveSidebarItem(0);
        }, 500);

        console.log("✅ News slider initialized successfully");
    } catch (error) {
        console.error("❌ Error initializing news slider:", error);
        createDefaultSlide();
    }
};

// ✅ Create default slide jika tidak ada data
const createDefaultSlide = (): void => {
    const swiperWrapper = document.getElementById("x-headnews");
    if (!swiperWrapper) return;

    swiperWrapper.innerHTML = `
        <div class="swiper-slide relative w-full h-full">
            <img src="/assets/default.svg" alt="Default News"
                class="headnews-img w-full h-[40vh] sm:h-[50vh] md:h-[60vh] lg:h-[70vh] object-cover" />
            <div class="absolute bottom-0 left-0 w-full h-1/2 gradient-overlay"></div>
            <div class="absolute bottom-6 left-5 md:left-8 text-white max-w-4xl">
                <h1 class="title text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2">
                    SELAMAT DATANG DI SMK PGRI 3 MALANG
                </h1>
                <p class="desc text-base sm:text-lg md:text-xl lg:text-2xl font-bold mb-6">
                    Success by Discipline - Mengutamakan Kedisiplinan untuk Meraih Kesuksesan
                </p>
            </div>
        </div>
    `;

    initializeSwiperInstance();
};

// ✅ Initialize Swiper instance
const initializeSwiperInstance = (): void => {
    const swiperEl = document.querySelector(".mySwiper");
    if (!swiperEl) {
        console.error("❌ Swiper element (.mySwiper) not found");
        return;
    }

    // Destroy existing Swiper instance
    if (newsSwiper) {
        newsSwiper.destroy(true, true);
        newsSwiper = null;
    }

    try {
        newsSwiper = new Swiper(".mySwiper", {
            modules: [Navigation, Pagination, Autoplay, EffectFade],
            loop: allBeritas.length > 1, // Only loop if more than 1 slide
            autoplay:
                allBeritas.length > 1
                    ? {
                          delay: 5000,
                          disableOnInteraction: false,
                      }
                    : false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            effect: "fade",
            fadeEffect: {
                crossFade: true,
            },
            speed: 1000,
            on: {
                init: function () {
                    console.log("✅ Swiper initialized successfully");
                    console.log(
                        `🔄 Loop mode: ${this.params.loop}, Autoplay: ${this.params.autoplay}`
                    );
                },
                slideChange: function () {
                    // Sync dengan sidebar saat slide berubah
                    const activeIndex = this.realIndex;
                    setActiveSidebarItem(activeIndex);
                },
            },
        });
    } catch (error) {
        console.error("❌ Error initializing Swiper:", error);
    }
};

// ✅ Function untuk handle klik berita di sidebar
const showNews = (id: number, title: string, desc: string, image: string): void => {
    console.log("🔄 Showing news:", title);

    if (!newsSwiper || allBeritas.length === 0) {
        console.error("❌ Swiper not initialized or no beritas data");
        return;
    }

    // Cari index berita yang diklik
    const newsIndex = allBeritas.findIndex(
        (berita) =>
            berita.id === id &&
            berita.title === title &&
            berita.deskripsi === desc &&
            berita.gambar === image
    );

    console.log(`📌 Found news at index: ${newsIndex}`);

    if (newsIndex !== -1 && newsSwiper) {
        // Direct ke slide yang sesuai
        newsSwiper.slideToLoop(newsIndex);
        // setActiveSidebarItem(newsIndex);
    }
};

// ✅ Set active item di sidebar
const setActiveSidebarItem = (activeIndex: number): void => {
    document.querySelectorAll("#x-sidenews .sidenews-item");
};

// ✅ Initialize regular Swiper (untuk swiper lainnya jika ada)
const initSwiper = (): void => {
    const swiperEl = document.querySelector(".mySwiper");
    if (!swiperEl) return;

    // Jika news slider sudah dihandle oleh initializeNewsSlider, skip
    if (document.getElementById("x-headnews")) {
        console.log("📰 News swiper will be handled by initializeNewsSlider");
        return;
    }

    // Fallback untuk swiper biasa
    try {
        new Swiper(".mySwiper", {
            modules: [Navigation, Pagination, Autoplay, EffectFade],
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            effect: "fade",
            speed: 1000,
        });
        console.log("✅ Regular Swiper initialized");
    } catch (error) {
        console.error("❌ Error initializing regular Swiper:", error);
    }
};

// ✅ Inisialisasi Micromodal
MicroModal.init({
    disableScroll: true,
    awaitOpenAnimation: true,
    awaitCloseAnimation: true,
});

// ✅ Event listener global untuk semua tombol modal
document.addEventListener("click", (e) => {
    const trigger = (e.target as HTMLElement).closest(
        "[data-micromodal-trigger]"
    ) as HTMLElement | null;
    if (!trigger) return;

    const title = trigger.dataset.title || "Tanpa Judul";
    const content = trigger.dataset.content || "Tidak ada konten.";
    const image = trigger.dataset.image || "/assets/default.svg";

    const modalTitle = document.getElementById("modalTitle");
    const modalContent = document.getElementById("modalContent");
    const modalImage = document.getElementById(
        "modalImage"
    ) as HTMLImageElement;

    if (modalTitle) modalTitle.textContent = title;
    if (modalContent) modalContent.innerHTML = content;
    if (modalImage) modalImage.src = image;

    MicroModal.show("newsModal");
});

// ✅ INIT based-on DOMContentLoaded Event Listener
document.addEventListener("DOMContentLoaded", (): void => {
    console.log("🏫 SMK PGRI 3 Malang - Initializing...");

    // Export functions ke global scope FIRST
    window.showNews = showNews;
    window.initializeNewsSlider = initializeNewsSlider;

    // Alpine
    window.Alpine = Alpine;
    Alpine.start();
    console.log("✅ AlpineJS initialized successfully");

    // Mobile menu
    initMobileMenu();
    console.log("✅ Mobile menu initialized successfully");

    // Initialize news slider first
    initializeNewsSlider();
    console.log("✅ News slider initialization triggered");

    // Regular swiper (fallback)
    initSwiper();

    // Scroll and Chart
    initScrollButtons();
    initChartGabungan();

    console.log("🎉 All components initialized successfully");
});

// ✅ Debug scroll (opsional)
const scrollDebug: boolean = false;
if (scrollDebug) {
    document.addEventListener("scroll", (): void => {
        console.log("ScrollY:", window.scrollY);
    });
}

// ✅ Export untuk modul lainnya
export { showNews, initializeNewsSlider };
