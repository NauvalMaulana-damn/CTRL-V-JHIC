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
        host: '192.168.1.7',
        watch: {
            usePolling: true,
            interval: 500,
        },
        hmr: {
            host: '192.168.1.7',
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
