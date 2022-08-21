import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/sass/app.scss',
            'resources/sass/_glide.scss',
            'resources/js/app.js',
            'resources/js/glide.js',
        ]),
       {
           name: 'blade',
           handleHotUpdate({ file, server }) {
               if (file.endsWith('.blade.php')) {
                   server.ws.send({
                       type: 'full-reload',
                       path: '*',
                   });
               }
           },
       }
    ],
})