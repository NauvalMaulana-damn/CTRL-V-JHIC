// Import libraries
import Alpine from "alpinejs"
import Swiper from "swiper";
import { Autoplay, Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";

// Extend window object for Alpine
declare global {
    interface Window {
        Alpine: typeof Alpine;
    }
}

// Initialize Alpine.js
window.Alpine = Alpine;
Alpine.start();

// Initialize when DOM is ready
document.addEventListener("DOMContentLoaded", () => {
    // Swiper initialization
    const swiperEl = document.querySelector(".mySwiper");
    if (swiperEl instanceof HTMLElement) {
        new Swiper(swiperEl, {
            modules: [Autoplay, Pagination],
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 5000,
            },
        });
    }

    // Mobile menu toggle
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("navMenu");

    if (hamburger && navMenu) {
        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        });
    }
});
