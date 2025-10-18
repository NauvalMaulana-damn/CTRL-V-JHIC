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
        host: 'smkpgri3mlg.jh-beon.cloud',
        watch: {
            usePolling: true,
            interval: 500,
        },
        hmr: {
            host: 'smkpgri3mlg.jh-beon.cloud',
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
