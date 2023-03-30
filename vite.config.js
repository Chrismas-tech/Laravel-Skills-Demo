import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/scss/backend/app-backend.scss",
                "resources/scss/frontend/app-frontend.scss",
                "resources/js/app.js",
            ],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
        }),
    ],
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "node_modules"),
        },
    },
});
