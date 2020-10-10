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

    mix.styles([
        'resources/css/bootstrap.min.css',
        'resources/css/font-awesome.min.css',
        'resources/css/flaticon-set.css',
        'resources/css/magnific-popup.css',
        'resources/css/owl.carousel.min.css',
        'resources/css/owl.theme.default.min.css',
        'resources/css/animate.css',
        'resources/css/bootsnav.css',
        'resources/css/plugins.min.css',
        'resources/css/style.css',
        'resources/css/responsive.css',
    ], 'public/css/all.css').version();

    mix.scripts([
        'resources/js/jquery-1.12.4.min.js',
        'resources/js/bootstrap.min.js',
        'resources/js/equal-height.min.js',
        'resources/js/jquery.appear.js',
        'resources/js/jquery.easing.min.js',
        'resources/js/jquery.magnific-popup.min.js',
        'resources/js/modernizr.custom.13711.js',
        'resources/js/owl.carousel.min.js',
        'resources/js/wow.min.js',
        'resources/js/isotope.pkgd.min.js',
        'resources/js/imagesloaded.pkgd.min.js',
        'resources/js/count-to.js',
        'resources/js/jquery.nice-select.min.js',
        'resources/js/YTPlayer.min.js',
        'resources/js/bootsnav.js',
        'resources/js/main.js',
    ], 'public/js/all.js').version();