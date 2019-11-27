const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const autoprefixer = require('autoprefixer');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/css/app.scss', 'public/css')
    .copy('resources/images/*', 'public/images')
    .copy('resources/svg/*', 'public/images/svg')
    .copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/fonts')
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('tailwind.config.js'),
            autoprefixer()
        ]
    });
