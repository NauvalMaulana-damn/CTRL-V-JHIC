import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    // server: {
    //     host: 'localhost', // atau '0.0.0.0' kalau kamu akses lewat IP LAN
    //     hmr: {
    //         host: '127.0.0.1', // ganti ke IP kamu kalau akses pakai IP
    //     },
    // },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/ts/app.ts"],
            refresh: true,
        }),
    ],
    build: {
        minify: 'terser',
        cssCodeSplit: true,
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ['swiper'],
                },
            },
        },
    },
});
