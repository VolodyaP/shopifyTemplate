import { defineConfig } from 'vite'
import laravel from "laravel-vite-plugin";

export default defineConfig({
    // plugins: [vue()]
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
            ],
            refresh: true,
        })
    ],
    server: {
        hmr: {
            host: 'localhost'
        }
    }
})
