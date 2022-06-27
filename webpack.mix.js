const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/css/frontend/index.scss', 'public/css/frontend')
	.sass('resources/css/frontend/watch.scss', 'public/css/frontend')
    .sass('resources/css/backend/index.scss', 'public/css/backend');
