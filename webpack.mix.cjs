const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/styles.css', 'public/css', [
      require('tailwindcss'),
   ])
   .babelConfig({
      presets: ['@babel/preset-env'],
   });




