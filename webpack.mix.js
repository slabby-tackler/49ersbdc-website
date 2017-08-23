let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .copy('resources/assets/images/49ersbdc_logo.ico', 'public/faviocon.ico')
   .copy('resources/assets/images/49ersbdc_new_logo_2_text.png', 'public/images/logo.png')
   .copy('resources/assets/images/49ersbdc_new_logo_2_no_text.png', 'public/images/logo_phone.png');
