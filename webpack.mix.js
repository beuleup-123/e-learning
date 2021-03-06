const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.js('resources/js/app.js', 'public/js')
    .js('resources/jquery/jquery.min.js', 'public/js')
    .js('resources/jquery/jquery.js', 'public/js')
    .js('resources/jquery/jquery.slim.js', 'public/js')
    .js('resources/jquery/jquery.slim.min.js', 'public/js')
    .js('resources/js/bootstrap.js', 'public/js')
    .js('resources/js/bootstrap.bundle.min.js', 'public/js')
    .js('resources/js/bootstrap.min.js', 'public/js')
    .js('resources/js/bootstrap.bundle.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles(['resources/css/blog-home.css','resources/css/bootstrap.css',
             'resources/css/bootstrap-grid.css','resources/css/bootstrap-reboot.css'], 'public/css/all.css')
    .styles(['resources/css/fontawesome-free/css/all.min.css'],'public/css/fontawesome.css')
    .styles(['resources/css/sb-admin.css'],'public/css/sb-admin.css');
mix.copyDirectory('node_modules/tinymce/plugins', 'public/node_modules/tinymce/plugins');
mix.copyDirectory('node_modules/tinymce/skins', 'public/node_modules/tinymce/skins');
mix.copyDirectory('node_modules/tinymce/themes', 'public/node_modules/tinymce/themes');
mix.copy('node_modules/tinymce/jquery.tinymce.js', 'public/node_modules/tinymce/jquery.tinymce.js');
mix.copy('node_modules/tinymce/jquery.tinymce.min.js', 'public/node_modules/tinymce/jquery.tinymce.min.js');
mix.copy('node_modules/tinymce/tinymce.js', 'public/node_modules/tinymce/tinymce.js');
mix.copy('node_modules/tinymce/tinymce.min.js', 'public/node_modules/tinymce/tinymce.min.js');

