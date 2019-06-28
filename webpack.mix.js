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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'public/css/bootstrap.css',
    'public/style.css',
    'public/css/swiper.css',
    'public/css/dark.css',
    'public/css/font-icons.css',
    'public/css/animate.css',
    'public/css/magnific-popup.css',
    'public/css/responsive.css',
], 'public/css/all.css');

mix.scripts([
    'public/js/jquery.js',
    'public/js/plugins.js',
    'public/js/functions.js',
], 'public/js/all.js');

mix.disableSuccessNotifications();
