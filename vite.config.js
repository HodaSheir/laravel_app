import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/blog-post.css',
                'resources/css/bootstrap.css',
                'resources/css/bootstrap.min.css',
                'resources/css/font-awesome.css',
                'resources/css/sb-admin-2.css',
                'resources/css/styles.css',
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
