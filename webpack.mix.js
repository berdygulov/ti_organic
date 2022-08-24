const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css')
    .options({
        postCss: [tailwindcss('./tailwind.config.js')],
    })
    .version();

mix.copyDirectory('resources/assets', 'public/assets')

// < svg
// className = "arrow arrow-prev w-16m h-16m" >
//     < use
// xlink:href = "{{ asset('assets/image/sprite.svg#arrow-prev') }}" > < /use>
// </svg>
