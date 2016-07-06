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
    mix.styles([
    	'toolkit-startup.css',
    	'application-startup.css',
    	'custom.css',
    	'select2.css',
    	'bootstrap-select.min.css',
    ]);
    mix.scripts([
	    'application.js',
	    'toolkit.js',
    ], 'public/js/all.js');
    mix.scripts([
	    'jquery.min.js',
	    'select2.js',
	    'jquery.pjax.min.js',
    ], 'public/js/jquery.js');
    
});
