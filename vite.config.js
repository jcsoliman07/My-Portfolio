import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: '0.0.0.0',
        port: process.env.PORT || 5173,
        strictPort: true,
    },
    preview: {
        host: '0.0.0.0',
        port: process.env.PORT || 4173,
        strictPort: true,
        allowedHosts: [
            'jomar-soliman-portfolio.onrender.com',
            'localhost' // keep local development allowed
        ]
    }
});