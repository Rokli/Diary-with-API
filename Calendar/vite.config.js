import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/diary.css', 'resources/js/diary.js',
                'node_modules/bootstrap/scss/bootstrap.scss','node_modules/bootstrap/js/index.esm.js'],
            refresh: true,
        }),
    ],
});
