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
            '127.0.0.1',
            'smkpgri3mlg.jh-beon.cloud',
            'smkpgri3mlg.web.id',
        ],
    },
    // TAMBAHKAN INI: Base URL relative
    base: '/build/',
    build: {
        minify: 'terser',
        cssCodeSplit: true,
        // Assets akan di-build ke folder build/assets
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
