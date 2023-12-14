import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/main.js',
                // 'resources/js/lib/animate/animate.css',
                // 'resources/js/lib/animate/animate.min.css',
                // 'resources/js/lib/counterup/counterup.min.js',
                // 'resources/js/lib/easing/easing.js',
                // 'resources/js/lib/easing/easing.min.js',  
                // 'resources/js/lib/jquery/jquery.min.js',
                // 'resources/js/lib/jquery/jquery-migrate.min.js',
                // 'resources/js/lib/jquery/jquery-ui.js',
                // 'resources/js/lib/isotope/isotope.pkgd.js',
                // 'resources/js/lib/isotope/isotope.pkgd.min.js',
                // 'resources/js/lib/lightbox/css/lightbox.css',
                // 'resources/js/lib/lightbox/css/lightbox.min.css',
                // 'resources/js/lib/owlcarousel/assets/owl.carousel.css',
                // 'resources/js/lib/owlcarousel/assets/owl.carousel.min.css',
                // 'resources/js/lib/owlcarousel/assets/owl.theme.default.css',
                // 'resources/js/lib/owlcarousel/assets/owl.theme.default.min.css',
                // 'resources/js/lib/owlcarousel/assets/owl.theme.green.css',
                // 'resources/js/lib/owlcarousel/assets/owl.theme.green.min.css',
                // 'resources/js/lib/wow/wow.js',
                // 'resources/js/lib/wow/wow.min.js',

     
            ],
            refresh: true,
        }),
        react(),
    ],
    resolve: {  
        alias: {
            '@': '/resources/js',
            '@sass': '/resources/sass',
            '@css': '/resources/css',
        },
    }
});
