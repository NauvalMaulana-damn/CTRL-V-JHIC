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

tailwind.config = {
    theme: {
        extend: {
            colors: {
                customRed: "#FD5353",
                customOrange: "#E17626",
                customBlue: "#2492D1",
                customPink: "#FD467E",
                customInsta: "#E1306C",
                darkGray: "#222325",
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                inter: ["Inter", "sans-serif"],
            },
            backgroundImage: {
                customIG:
                    "linear-gradient(135deg, #f58529, #dd2a7b, #8134af, #515bd4)",
            },
            height: {
                "screen-minus-88": "calc(100vh - 87.97px)",
            },
        },
    },
};
