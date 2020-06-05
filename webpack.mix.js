const mix = require('laravel-mix');

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

mix.autoload({
    jquery: ['$', 'jQuery', 'window.jQuery'],
});
mix.styles([
    'resources/css/nucleo.css',
    'resources/css/argon.css',
    'resources/css/open-sans.css',
    'resources/css/awesome.css',
    'resources/css/animate.min.css'
], 'public/css/app.css')
mix.copyDirectory('resources/webfonts', 'public/webfonts')
mix.copyDirectory('resources/img', 'public/img')
mix.scripts([
    'resources/js/argon.js',
], 'public/js/scripts.js')
mix.js(['resources/js/app.js'], 'public/js/app.js').sourceMaps()
