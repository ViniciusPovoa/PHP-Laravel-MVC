const mix = require('laravel-mix');



mix 
    .saas('resources/css/app.scss', 'public/css')
    .js('resources/js/app.js', 'public/js');