let mix = require('laravel-mix');

mix.js('src/js/main.js', 'dist/js/')
.sass('src/scss/master.scss', 'dist/css/')
.options({
  processCssUrls:false
});
