const elixir = require('laravel-elixir');


require('laravel-elixir-vue');

elixir.config.sourcemaps = true;
elixir.config.appPath = 'application';
elixir.config.viewPath = 'resources/views';


elixir(mix => {
	/* Files */
		mix.copy('resources/assets/files/','public/')

	/* Fonts */
		// Bootstrap-Glyphicons
		.copy('node_modules/bootstrap-sass/assets/fonts/', 'public/fonts/')
	/* Copy CSS */
		// DataTables
		.copy('node_modules/datatables.net-bs/css/','resources/assets/sass/libs')

	/* Copy JS */
		// Modernizer
		.copy('node_modules/npm-modernizr/modernizr.js', 'resources/assets/js/libs/')

	/* Combine JS */
		// Libs
		.scriptsIn('resources/assets/js/libs', 'public/js/all.js')
    	.webpack('app.js')
	
	/* Combine css */
		// Sass Entry Point
		.sass('app.scss');
    
	/* browserSync - development */
	    mix.browserSync(
	    	{
	    		proxy: 'http://localhost/books/public/',
	    		port: 8080
	    	});
});
