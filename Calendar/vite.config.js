import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/diary.css', 'resources/js/diary.js'],
            refresh: true,
        }),
    ],
});
