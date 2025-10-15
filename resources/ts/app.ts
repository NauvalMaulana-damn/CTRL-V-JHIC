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
import MicroModal from "micromodal";
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
    image: string,
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
        const img =
            imgContainer.querySelector<HTMLImageElement>(".headnews-img");

        if (img) img.src = `storage/${image}`;

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

// Inisialisasi Micromodal
MicroModal.init({
    disableScroll: true,
    awaitOpenAnimation: true,
    awaitCloseAnimation: true,
});

// Event listener global untuk semua tombol modal
document.addEventListener("click", (e) => {
    const trigger = (e.target as HTMLElement).closest(
        "[data-micromodal-trigger]"
    ) as HTMLElement | null;
    if (!trigger) return;

    const title = trigger.dataset.title || "Tanpa Judul";
    const content = trigger.dataset.content || "Tidak ada konten.";
    const image = trigger.dataset.image || "/default.jpg";

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

// INIT based-on DOMContendLoaded Event Listener
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

    // Scroll and Chart
    initScrollButtons();
    initChartGabungan();
});

const scrollDebug: boolean = false;
if (scrollDebug)
    document.addEventListener("scroll", (): void => {
        console.log("ScrollY:", window.scrollY);
    });
