const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/scss/app.scss', 'public/css')
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
