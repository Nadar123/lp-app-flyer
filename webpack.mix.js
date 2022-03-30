let mix = require("laravel-mix");

mix
    .options({
        processCssUrls: false,
    })
    .js(["src/js/app.js", "src/js/index.js"], "dist/app.js")
    .sass("src/scss/app.scss", "dist/");