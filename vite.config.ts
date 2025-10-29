import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/ts/app.ts"],
            refresh: true,
        }),
    ],
    server: {
        host: '127.0.0.1',
        watch: {
            usePolling: true,
            interval: 500,
        },
        hmr: {
            host: '127.0.0.1',
            protocol: 'ws',
            port: 5173,
        },
    },
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