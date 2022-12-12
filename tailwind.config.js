/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "primary": "#F28E22",
                "secondary": "#2d3748",
            }
        },
    },
    plugins: [],
    prefix: "tw-",
    corePlugins: {
        preflight: false,
    },
    important: true,
}
