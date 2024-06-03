const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .vue({
       version: 3,
       options: {
           compilerOptions: {
               isCustomElement: tag => tag.startsWith('custom-')
           }
       }
   })
   .alias({
       'vue$': 'vue/dist/vue.esm-bundler.js'
   })
   .sass('resources/sass/app.scss', 'public/css');
