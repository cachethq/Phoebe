let mix = require('laravel-mix')
let tailwindcss = require('tailwindcss')

mix
    .js('resources/js/app.js', 'public')
    .setPublicPath('public')
    .postCss('resources/css/app.css', 'public', [tailwindcss('tailwind.js')])
    .version()