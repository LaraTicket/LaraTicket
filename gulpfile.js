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
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');

    mix.copy('resources/assets/js', 'public/js');
    mix.version('css/app.css');
});
