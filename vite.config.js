import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import path from 'node:path';
import { optimizeImages, optimizeImage } from './scripts/images.mjs';

// Generates optimized .webp for every png/jpg in public/images.
// Runs once on build/dev start, and watches the folder during `npm run dev`
// so dropping in a new image auto-converts it and reloads the page.
function imageOptimizer() {
    const dir = path.resolve('public/images');
    return {
        name: 'image-optimizer',
        async buildStart() {
            await optimizeImages({ log: false });
        },
        configureServer(server) {
            optimizeImages({ log: false });
            const handle = async (file) => {
                if (!/\.(png|jpe?g)$/i.test(file)) return;
                const result = await optimizeImage(file).catch(() => null);
                if (result) server.ws.send({ type: 'full-reload' });
            };
            server.watcher.add(dir);
            server.watcher.on('add', handle);
            server.watcher.on('change', handle);
        },
    };
}

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.jsx',
            refresh: true,
        }),
        react(),
        imageOptimizer(),
    ],
});
