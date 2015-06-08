var gulp = require("gulp");
var shell = require("gulp-shell");
var elixir = require("laravel-elixir");

elixir.extend("clear", function() {

    gulp.task("clear", function() {
        gulp.src("").pipe(shell("clear"));
    });

    return this.queueTask("clear");

});

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application.
 |
 */
// elixir.config.sourcemaps = false;

elixir(function(mix) {
    mix.sass('main.scss');
    mix.version('styles/main.css');
});
