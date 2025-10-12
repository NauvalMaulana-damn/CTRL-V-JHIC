declare global {
    interface Window {
        Alpine: typeof Alpine;
    }
}

import "../css/app.css";
import Alpine from "alpinejs";
import Swiper, { SwiperOptions } from "swiper";
import { Autoplay, Pagination, Navigation } from "swiper/modules";
import { initChartGabungan } from "./chart";
import { initScrollButtons } from "./scroll";
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
const initSwiper = () => {
    const swiperEl = document.querySelector(".mySwiper");
    if (!(swiperEl instanceof HTMLElement)) return;

    const swiperOptions = {
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
        effect: "fade",
        speed: 1000,
    } as SwiperOptions;

    new Swiper(swiperEl, swiperOptions);
};

function showNews(
    title: string,
    desc: string,
    image1: string,
    image2: string,
    image3: string
): void {
    const imgContainer = document.getElementById("x-headnews");
    const txtContainer = document.getElementById("x-headnews-content");
    if (!imgContainer || !txtContainer) return;

    // Tambah class transition supaya animasi aktif
    imgContainer.classList.add("transition-opacity", "duration-500");
    txtContainer.classList.add("transition-opacity", "duration-500");

    // Fade out
    imgContainer.style.opacity = "0";
    txtContainer.style.opacity = "0";

    setTimeout(() => {
        // Ganti gambar & teks setelah fade out selesai
        const img1 =
            imgContainer.querySelector<HTMLImageElement>(".headnews-img1");
        const img2 =
            imgContainer.querySelector<HTMLImageElement>(".headnews-img2");
        const img3 =
            imgContainer.querySelector<HTMLImageElement>(".headnews-img3");

        if (img1) img1.src = `/assets/${image1}`;
        if (img2) img2.src = `/assets/${image2}`;
        if (img3) img3.src = `/assets/${image3}`;

        txtContainer
            .querySelectorAll(".title")
            .forEach((el) => (el.textContent = title.toUpperCase()));
        txtContainer
            .querySelectorAll(".desc")
            .forEach((el) => (el.textContent = desc));

        // Fade in lagi
        imgContainer.style.opacity = "1";
        txtContainer.style.opacity = "1";
    }, 500); // 500ms = durasi transisi
}
(window as any).showNews = showNews;

// INIT based-on DOMContendLoaded Event Listener
document.addEventListener("DOMContentLoaded", (): void => {
    // Headnews Content INIT
    document
        .querySelector<HTMLDivElement>("#x-sidenews .sidenews-item")
        .click();

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

    // Scroll and Chart
    initScrollButtons();
    initChartGabungan();
});

const scrollDebug: boolean = false;
if (scrollDebug) document.addEventListener("scroll", (): void => {
    console.log("ScrollY:", window.scrollY);
});
