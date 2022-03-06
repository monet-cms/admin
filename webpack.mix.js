const mix = require('laravel-mix');

mix.postCss('resources/css/admin.css', 'resources/dist', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer')
])
.version();