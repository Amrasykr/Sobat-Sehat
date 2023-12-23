/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },

    plugins: [require("daisyui")],

    daisyui: {
        themes: [
            {
                SobatSehat: {
                    ...require("daisyui/src/theming/themes")["light"],
                    "primary": "#06B6D4",
                    "secondary": "#4ADE80",
                }
            },
            "light", "dark", "cupcake"],
    },

}

