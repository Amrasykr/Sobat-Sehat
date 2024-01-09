/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        'node_modules/preline/dist/*.js',
    ],
    theme: {
        extend: {},
    },

    plugins: [
        require("daisyui"),
        require("preline/plugin"),
    ],

    daisyui: {
        themes: [
            {
                SobatSehat: {
                    ...require("daisyui/src/theming/themes")["light"],
                    "primary": "#06B6D4",
                    "secondary": "#4ADE80",
                }
            },
            "light", "dark", "cupcake", "winter"
        ],
    },

}

