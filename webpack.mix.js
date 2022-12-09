const mix = require("laravel-mix");
const path = require("path");
require("laravel-mix-purgecss");

const glob = require("glob");
const ReplaceInFileWebpackPlugin = require("replace-in-file-webpack-plugin");
const rimraf = require("rimraf");
const del = require("del");

// Remove existing generated assets from public folder
del.sync([
    "public/assets/css/*",
    "public/assets/js/*",
    "public/assets/media/*",
    "public/assets/plugins/*",
]);

// Build 3rd party plugins css/js
mix.sass("resources/sass/app.scss", "public/css", {
    sassOptions: { includePaths: ["node_modules"] },
})
    .then(() => {
        /*    // remove unused preprocessed fonts folder
        rimraf(path.resolve("public/assets/fonts"), () => {
        });
        rimraf(path.resolve("public/assets/images"), () => {
        });*/
    })
    .sourceMaps(!mix.inProduction())
    // .setResourceRoot('./')
    .options({ processCssUrls: false })
    .js(
        ["resources/src/webpack/plugins/plugins.js"],
        "public/assets/plugins/global/plugins.bundle.js"
    );

// Build css/js
mix.js(
    ["resources/src/webpack/scripts.js", "resources/js/app.js"],
    "public/js/app.js"
).postCss("resources/css/app.css", "public/css/tailwind.css", [
    require("tailwindcss"),
]);

// Build custom 3rd party plugins
(glob.sync("resources/src/plugins/custom/**/*.js") || []).forEach((file) => {
    mix.js(
        file,
        `public/assets/${file
            .replace("resources/src/", "")
            .replace(".js", ".bundle.js")}`
    );
});
(glob.sync("resources/src/plugins/custom/**/*.scss") || []).forEach((file) => {
    mix.sass(
        file,
        `public/assets/${file
            .replace("resources/src/", "")
            .replace(".scss", ".bundle.css")}`
    );
});

// Build css pages (single page use)
(glob.sync("resources/src/sass/pages/**/!(_)*.scss") || []).forEach((file) => {
    file = file.replace(/[\\/]+/g, "/");
    mix.sass(
        file,
        file
            .replace("resources/src/sass", "public/assets/css")
            .replace(/\.scss$/, ".css")
    );
});

var extendedFiles = [];
// Extend custom js files for laravel
(glob.sync("resources/extended/js/**/*.js") || []).forEach((file) => {
    var output = `public/assets/${file.replace("resources/extended/", "")}`;
    mix.js(file, output);
    extendedFiles.push(output);
});

// Js pages (single page use)
(glob.sync("resources/src/js/custom/**/*.js") || []).forEach((file) => {
    var output = `public/assets/${file.replace("resources/src/", "")}`;
    if (extendedFiles.indexOf(output) === -1) {
        mix.js(file, output);
    }
});

// Copy media folder
mix.copyDirectory("resources/src/media", "public/assets/media");

(glob.sync("resources/src/sass/themes/**/!(_)*.scss") || []).forEach((file) => {
    file = file.replace(/[\\/]+/g, "/");
    mix.sass(
        file,
        file
            .replace("resources/src/sass", "public/assets/css")
            .replace(/\.scss$/, ".css")
    );
});

mix.webpackConfig({
    resolve: {
        alias: {
            "@_": path.resolve(__dirname, "./resources"),
        },
        extensions: [".js", ".scss"],
    },
    plugins: [
        new ReplaceInFileWebpackPlugin([
            {
                // rewrite font paths
                dir: path.resolve("public/assets/plugins/global"),
                test: /\.css$/,
                rules: [
                    {
                        // fontawesome
                        search: /url\((\.\.\/)?webfonts\/(fa-.*?)"?\)/g,
                        replace: "url(./fonts/@fortawesome/$2)",
                    },
                    {
                        // flaticon
                        search: /url\(("?\.\/)?font\/(Flaticon\..*?)"?\)/g,
                        replace: "url(./fonts/flaticon/$2)",
                    },
                    {
                        // flaticon2
                        search: /url\(("?\.\/)?font\/(Flaticon2\..*?)"?\)/g,
                        replace: "url(./fonts/flaticon2/$2)",
                    },
                    {
                        // keenthemes fonts
                        search: /url\(("?\.\/)?(Ki\..*?)"?\)/g,
                        replace: "url(./fonts/keenthemes-icons/$2)",
                    },
                    {
                        // lineawesome fonts
                        search: /url\(("?\.\.\/)?fonts\/(la-.*?)"?\)/g,
                        replace: "url(./fonts/line-awesome/$2)",
                    },
                    {
                        // socicons
                        search: /url\(("?\.\.\/)?font\/(socicon\..*?)"?\)/g,
                        replace: "url(./fonts/socicon/$2)",
                    },
                    {
                        // bootstrap-icons
                        search: /url\(.*?(bootstrap-icons\..*?)"?\)/g,
                        replace: "url(./fonts/bootstrap-icons/$1)",
                    },
                ],
            },
        ]),
        // Uncomment this part for RTL version
        /*new WebpackRTLPlugin({
            filename: '[name].rtl.css',
            options: {},
            plugins: [],
        })*/
    ],
    ignoreWarnings: [
        {
            module: /esri-leaflet/,
            message: /version/,
        },
    ],
});

// Webpack.mix does not copy fonts, manually copy
(glob.sync("resources/src/plugins/**/*.+(woff|woff2|eot|ttf)") || []).forEach(
    (file) => {
        var folder = file.match(/resources\/plugins\/(.*?)\//)[1];
        mix.copy(
            file,
            `public/assets/plugins/global/fonts/${folder}/${path.basename(
                file
            )}`
        );
    }
);
(
    glob.sync(
        "node_modules/+(@fortawesome|socicon|line-awesome|bootstrap-icons)/**/*.+(woff|woff2|eot|ttf)"
    ) || []
).forEach((file) => {
    var folder = file.match(/node_modules\/(.*?)\//)[1];
    mix.copy(
        file,
        `public/assets/plugins/global/fonts/${folder}/${path.basename(file)}`
    );
});

// Optional: Output datatables.net
/*mix.scripts(
    [
        "node_modules/datatables.net/js/jquery.dataTables.js",
        "node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js",
        "node_modules/datatables.net-responsive/js/dataTables.responsive.min.js",
        "node_modules/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js",
        "node_modules/datatables.net-scroller/js/dataTables.scroller.min.js",
        "resources/src/js/vendors/plugins/datatables.init.js",
    ],
    "public/assets/plugins/custom/datatables/datatables.bundle.js"
);
mix.styles(
    [
        "node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css",
        "node_modules/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css",
        "node_modules/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css",
    ],
    "public/assets/plugins/custom/datatables/datatables.bundle.css"
);*/

// Optional: Output fullcalendar
// mix.scripts([
//     'node_modules/fullcalendar/main.js',
//     'node_modules/fullcalendar/locales-all.min.js',
// ], 'public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js');
// mix.styles([
//     'node_modules/fullcalendar/main.min.css',
// ], 'public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css');

mix
    // .extract()
    .vue()
    .webpackConfig(require("./webpack.config"))
    .purgeCss({
        safelist: {
            deep: [
                /^label/,
                /^modal/,
                /^ps/,
                /^toast/,
                /^owl/,
                /^pika/,
                /^is/,
                /^ki/,
                /^select2/,
                /^flatpickr/,
                /^arrow/,
                /^num/,
                /^swal2/,
                /^drawer-/,
                /^kt-/,
                /^data-/,
                /^badge-/,
                /^multiselect-/,
                /^custom-/,
                /^slick-/,
            ],
        },
    });

if (mix.inProduction()) {
    mix.version();
}

// mix.browserSync("http://127.0.0.1:8000");

// mix.copy('vendor/proengsoft/laravel-jsvalidation/resources/views', 'resources/views/vendor/jsvalidation')
//     .copy('vendor/proengsoft/laravel-jsvalidation/public', 'public/vendor/jsvalidation');
