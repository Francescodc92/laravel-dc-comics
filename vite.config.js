import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

// importazione 1 di path
import path from 'path';
//importazione 2
// import { resolve } from 'path';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',  
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    resolve:{
        alias: {
            //Aggiungiamo un alias per la cartella /resources/
            '~resources': '/resources/',
            //Aggiungiamo un alias per la cartella /node_modules/bootstrap/
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    }
});
