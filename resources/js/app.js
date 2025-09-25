// Import libraries
import 'alpinejs';
import Swiper from 'swiper';
import 'swiper/css';

// Initialize when DOM is ready
document.addEventListener("DOMContentLoaded", function () {
    // Swiper initialization
    if (document.querySelector(".mySwiper")) {
        new Swiper(".mySwiper", {
            loop: true,
            pagination: { el: ".swiper-pagination", clickable: true },
            autoplay: { delay: 5000 },
        });
    }

    // Mobile menu
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("navMenu");

    if (hamburger && navMenu) {
        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        });
    }
});
