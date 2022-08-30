const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

mix.copy('resources/images', 'public/images');
mix.copy('resources/favicons', 'public/favicons');