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

mix.sass('resources/scss/app.scss', 'public/css/app.css')
mix.styles([
    'resources/css/nucleo.css',
    'resources/css/argon.css',
    'resources/css/open-sans.css'
], 'public/css/all.css')
mix.copyDirectory('resources/webfonts', 'public/webfonts')
mix.copyDirectory('resources/img', 'public/img')
mix.scripts([
    'resources/js/argon.js',
    'resources/js/bootstrap.bundle.min.js',
    'resources/js/Chart.extension.js',
    'resources/js/Chart.min.js',
    'resources/js/jquery.min.js',
    'resources/js/jquery.scrollbar.min.js',
    'resources/js/jquery-scrollLock.min.js',
    'resources/js/js.cookie.js'
], 'public/js/all.js')
