import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/diary.css', 'resources/js/diary.js', 'resources/js/bootstrap.js','resources/js/app.js','node_modules/bootstrap/scss/bootstrap.scss'],
            refresh: true,
        }),
    ],
});
