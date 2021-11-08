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

mix
    .options({
        processCssUrls: false,
    })
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/admiria_template/src/assets/scss/bootstrap.scss', 'public/css/dashboard_bootstrap.css')
    .sass('resources/sass/dashboard.scss', 'public/css/dashboard.css')
    .sass('resources/admiria_template/src/assets/scss/icons.scss', 'public/css/dashboard_icons.css')
    .scripts([
        'resources/admiria_template/src/assets/js/app.js',
        'resources/js/common.js',
    ], 'public/js/dashboard.js')

    // landing pages
    .version();
