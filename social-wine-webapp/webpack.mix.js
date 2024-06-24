const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/register.js', 'public/js') // Compila register.js
   .sass('resources/sass/app.scss', 'public/css')
   .version();
