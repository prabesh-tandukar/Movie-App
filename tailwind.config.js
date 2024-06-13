/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width: {
                96: "24rem",
            },
            colors: {
                green: {
                    50: "#f0fdf4",
                    100: "#dcfce7",

                    900: "#14532d",
                },
                teal: {
                    900: "#134e4a",
                    600: "#0d9488",
                },
            },
        },
    },
    plugins: [],
};
