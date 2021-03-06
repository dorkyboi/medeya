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

mix.js('resources/js/front/index.js', 'public/js/front.js')
    .sass('resources/sass/front/main.scss', 'public/css/front.css')
    .js('resources/js/admin/index.js', 'public/js/admin.js')
    .sass('resources/sass/admin/admin.scss', 'public/css/admin.css')
    .sourceMaps()
    .browserSync('medeya.test');
