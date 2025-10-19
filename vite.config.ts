import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

const config = {
    primary: "smkpgri3mlg.jh-beon.cloud",
    secondary: "smkpgri3mlg.web.id",
};

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/ts/app.ts"],
            refresh: true,
        }),
    ],
    server: {
        host: "0.0.0.0",
        port: 5173,
        allowedHosts: [
            config.primary,
            config.secondary,
            `www.${config.primary}`,
            `www.${config.secondary}`,
            "localhost",
            "127.0.0.1",
        ],
        watch: {
            usePolling: true,
            interval: 500,
        },
        hmr: {
            host: config.primary,
            protocol: "ws",
            port: 5173,
        },
    },
    build: {
        minify: "terser",
        cssCodeSplit: true,
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ["swiper"],
                },
            },
        },
    },
});
