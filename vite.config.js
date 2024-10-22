import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/Home/HomeAnimations.js',
                'resources/js/Home/HomeRoomsCarousel.js',
                'resources/js/Booking/DirectBooking.js',
                'resources/js/DatePicker/DatePicker.js',
                'resources/js/Alerts/successEmail.js',
            ],
            refresh: true,
        }),
    ],
});
