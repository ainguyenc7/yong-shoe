import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                    // 'resources/css/app.css',
                    'resources/css/all.min.css',
                    'resources/css/sb-admin-2.min.css',
                    'resources/js/app.js',
                    'resources/js/bootstrap.bundle.min.js',
                    'resources/js/bootstrap.js',
                    'resources/js/chart-area-demo.js',
                    'resources/js/chart-pie-demo.js',
                    'resources/js/Chart.min.js',
                    'resources/js/jquery.easing.min.js',
                    'resources/js/sb-admin-2.min.js',
                    'resources/js/jquery.min.js',
                    //storefront
                    'resources/css/store-front/bootstrap.css',
                    'resources/css/store-front/themify-icons.css',
                    'resources/css/store-front/nice-select.css',
                    'resources/css/store-front/font-awesome.min.css',
                    'resources/css/store-front/ion.rangeSlider.css',
                    'resources/css/store-front/ion.rangeSlider.skinFlat.css',
                    'resources/css/store-front/linearicons.css',
                    'resources/css/store-front/main.css',
                    'resources/css/store-front/owl.carousel.css',

                    'resources/js/store-front/jquery-2.2.4.min.js',
                    'resources/js/store-front/bootstrap.min.js',
                    'resources/js/store-front/jquery.ajaxchimp.min.js',
                    'resources/js/store-front/jquery.nice-select.min.js',
                    'resources/js/store-front/jquery.sticky.js',
                    'resources/js/store-front/nouislider.min.js',
                    'resources/js/store-front/countdown.js',
                    'resources/js/store-front/jquery.magnific-popup.min.js',
                    'resources/js/store-front/owl.carousel.min.js',

                    'resources/js/store-front/gmaps.min.js',
                    'resources/js/store-front/main.js',
                ],
            refresh: true,
        }),
        vue(),
    ],
    server: {
        server: {
            https: true,
            host: '2686-2402-800-629c-2e02-c0fc-dff0-1f7e-f3f1.ngrok-free.app', // Thay thế bằng domain local của bạn
        },
    }
});
