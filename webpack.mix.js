let mix = require('laravel-mix');

mix
.options({
    processCssUrls: false
})
.js(['src/js/app.js', 'src/js/main.js'], 'dist/app.js')
.sass('src/scss/app.scss', 'dist/')
// .copy(
//     './node_modules/@fontawesome/fontawesome-free/webfonts',
//     'public/webfonts'
// );