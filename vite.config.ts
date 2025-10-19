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
        host: '0.0.0.0',
        port: 5173,
        allowedHosts: [
            'smkpgri3mlg.jh-beon.cloud',
            'smkpgri3mlg.web.id',
            'www.smkpgri3mlg.web.id'
        ],
        cors: true,
    },
    build: {
        minify: 'terser',
        cssCodeSplit: true,
        // Pastikan assets menggunakan relative path
        assetsDir: 'assets',
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ['swiper'],
                },
            },
        },
    },
});
