const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {

	mix.webpackConfig({
		resolve: {
	        modules: [
	            path.resolve(__dirname, 'vendor/laravel/spark/resources/assets/js')
	        ]
	    }
	})

	mix.sass('homepage.scss');
	mix.sass('emails.scss');
	mix.sass('app.scss');
    mix.webpack('jobdesk.jsx');
});
