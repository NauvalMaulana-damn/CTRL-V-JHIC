import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

import path from 'path';


export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/ts/app.ts"],
            refresh: true,
        }),
        tailwindcss(),
    ],
    resolve: {
        alias: {
            // Modul utama
            shapes: path.resolve(__dirname, 'code_modules/shapes/dist/module.js'),
            schema: path.resolve(__dirname, 'code_modules/shapes/dist/schema.js'),

      // CSS sub-paths
        'shapes/css': path.resolve(__dirname, 'code_modules/shapes/dist/css/index.js'),
        'shapes/css/repetition': path.resolve(
          __dirname,
          'code_modules/shapes/dist/css/repetition.js'
        ),
        'shapes/css/shape': path.resolve(
          __dirname,
          'code_modules/shapes/dist/css/shape.js'
        ),
      },
    },
});
