declare global {
    interface Window {
        Alpine: typeof Alpine;
    }
}

import Alpine from 'alpinejs';
import Swiper from 'swiper';
import { Autoplay, Pagination } from 'swiper/modules';

// Import CSS Swiper
import 'swiper/css';
import 'swiper/css/pagination';

// Mobile menu functionality
const initMobileMenu = (): void => {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', (): void => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
    }
};

// Swiper init (no dynamic import)
const initSwiper = (): void => {
    const swiperEl = document.querySelector('.mySwiper');
    if (!swiperEl) return;

    new Swiper(swiperEl as HTMLElement, {
        modules: [Autoplay, Pagination],
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000,
        },
    });

    console.log('Swiper initialized successfully');
};

// Initialize everything
document.addEventListener('DOMContentLoaded', (): void => {
    console.log('SMK PGRI 3 Malang - Initializing');

    window.Alpine = Alpine;
    Alpine.start();
    console.log('AlpineJS initialized successfully');

    initMobileMenu();
    console.log('Mobile menu initialized successfully');

    initSwiper();
    console.log('Swiper initialized successfully');
});

document.addEventListener('scroll', (): void => {
    console.log('ScrollY:', window.scrollY);
});
