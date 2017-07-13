var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .addEntry('app', './assets/js/main.js')
    .addStyleEntry('global', './assets/scss/global.scss')
    .createSharedEntry('vendor', ['jquery', 'bootstrap-sass'])
    .enableSassLoader(function(sassOptions) {}, {
        resolve_url_loader: false
    })
    .autoProvidejQuery()
    .enableSourceMaps(!Encore.isProduction())
    .enablePostCssLoader()
    .enableVersioning()
;

module.exports = Encore.getWebpackConfig();
