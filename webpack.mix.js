const mix = require('laravel-mix');
const { VueLoaderPlugin } = require('vue-loader');

mix.js('resources/js/app.js', 'public/js')
   .webpackConfig({
      module: {
         rules: [
            {
               test: /\.vue$/,
               loader: 'vue-loader'
            },
            {
               test: /\.js$/,
               loader: 'babel-loader',
               exclude: /node_modules/
            }
         ]
      },
      plugins: [
         new VueLoaderPlugin()
      ],
      resolve: {
         extensions: ['.js', '.vue'],
      },
   });
