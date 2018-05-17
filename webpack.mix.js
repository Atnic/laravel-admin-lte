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

mix.autoload({
  jquery: ['$', 'jQuery', 'jquery', 'window.jQuery'],
});

mix.js('resources/assets/js/admin-lte.js', 'public/js')
  .sass('resources/assets/sass/admin-lte.scss', 'public/css');

mix.js('resources/assets/js/auth.js', 'public/js')
  .sass('resources/assets/sass/auth.scss', 'public/css');

mix.extract([
  'admin-lte',
  'axios',
  'bootstrap-sass',
  'fastclick',
  'jquery',
  'jquery-slimscroll',
  'lodash',
  'vue',
], 'public/js/vendor.js');

mix.version();

mix.setPublicPath('public');
