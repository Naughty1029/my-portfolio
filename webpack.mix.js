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

mix.setPublicPath('public_html/')
    .ts('resources/ts/index.tsx', 'public_html/js')
    .sass('resources/sass/app.scss', 'public_html/css')
    .sourceMaps();

mix.browserSync('my-portfolio.test');

if (mix.inProduction()) {
    mix.version();
}
