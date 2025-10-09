declare global {
    interface Window {
        Alpine: typeof Alpine;
    }
}

import '../css/app.css'
import Alpine from "alpinejs";
import Swiper, { SwiperOptions } from "swiper";
import { Autoplay, Pagination, Navigation } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

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

// ✅ Swiper init
const initSwiper = (): void => {
    const swiperEl = document.querySelector(".mySwiper");
    if (!(swiperEl instanceof HTMLElement)) return;

    const swiperOptions: SwiperOptions = {
        modules: [Navigation, Pagination, Autoplay],
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
    } as any;
    new Swiper(swiperEl, swiperOptions);
};

// ✅ DOMContentLoaded init
document.addEventListener("DOMContentLoaded", (): void => {
    console.log("SMK PGRI 3 Malang - Initializing...");

    // Alpine
    window.Alpine = Alpine;
    Alpine.start();
    console.log("AlpineJS initialized successfully");

    // Mobile menu
    initMobileMenu();
    console.log("Mobile menu initialized successfully");

    // Swiper
    initSwiper();
    console.log("Swiper initialized successfully");
});

// Optional: scroll debug
document.addEventListener("scroll", (): void => {
    console.log("ScrollY:", window.scrollY);
});
