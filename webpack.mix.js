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
mix.copyDirectory('resources/fonts', 'public/fonts')
mix.copyDirectory('resources/img', 'public/img')
