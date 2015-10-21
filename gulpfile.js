var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    //mix.sass('app.scss');
    mix
      .styles(
          [
            "bootstrap.min.css",
            "bootstrap-paper.min.css",
            'font-awesome.min.css',
            'main.css'
          ], 'public/css/all.css')
      .scripts(
        [
          'jquery-1.11.3.min.js',
          'bootstrap.min.js'
        ], 'public/js/all.js')
      .scripts(
        [
          'html5shiv.min.js',
          'respond.min.js'
        ],'public/js/ie.js')
      .version([
        'css/all.css',
        'js/all.js',
        'js/ie.js'
        ]);
});
