let mix = require('laravel-mix').mix;


mix.sass('node_modules/bulma/bulma.sass', 'public/css');
mix.sass('resources/assets/sass/app.scss', 'public/css');
//mix.js('resources/assets/js/app.js', 'public/js')
