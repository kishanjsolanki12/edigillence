const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copy('node_modules/mdb-ui-kit/dist/js/mdb.min.js', 'public/js/mdb.min.js')
   .copy('node_modules/mdb-ui-kit/dist/css/mdb.min.css', 'public/css/mdb.min.css')
   .sourceMaps();
