let mix = require('laravel-mix').mix;

mix.setPublicPath('public');
mix.sass('node_modules/bulma/bulma.sass', 'public/css');
mix.sass('resources/assets/sass/app.scss', 'public/css')
  .version();

//mix.js('resources/assets/js/app.js', 'public/js')
