const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.js([
 'node_modules/bootstrap/dist/js/bootstrap.js',
 'node_modules/jquery/dist/jquery.min.js',
 ],'public/js','./');

mix.browserSync({
	proxy:'sipiu.dev.com'	
});
