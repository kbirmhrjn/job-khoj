var elixir = require('laravel-elixir');
var paths = {
                'jquery' : './node_modules/jquery/',
                'bootstrap': './node_modules/bootstrap-sass/assets/'
            };
elixir(function(mix) {
  mix.sass("app.scss", 'public/css/', {includePaths: [paths.bootstrap + 'stylesheets/']})
  .browserify('app.js')
      .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts/bootstrap')
      .browserSync({
        proxy: 'job-khoj.app'
      });
});
