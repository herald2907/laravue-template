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

mix.js('resources/js/app.js', 'public/js').extract([
    'vue',
    'axios',
    'vuex',
    'vue-router',
]).vue();
mix.sass('resources/sass/style.scss', 'public/css');
mix.sass('resources/sass/home.scss', 'public/css');
mix.disableNotifications();

mix.webpackConfig({
    output: {
        chunkFilename: 'js/chunks/' + process.env.npm_config_section + '/[name].js?id=[chunkhash]',
        publicPath: '/',
    },
});