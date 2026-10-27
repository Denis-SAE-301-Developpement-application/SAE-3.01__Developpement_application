import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/script_index.js', 'resources/css/style_index.css' , 'resources/js/script_about.js', 'resources/css/style_about.css'],
            refresh: true,
        }),
    ],
});
