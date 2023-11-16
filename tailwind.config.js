/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        colors: {
            // Brand
            brand: {
                50: "#40B073",
                100: "#3BA46A",
                200: "#369762",
                300: "#328A5A",
                400: "#2D7E52",
                500: "#297149",
                600: "#246541",
                700: "#205839",
                800: "#1B4C31",
                900: "#173F29",
            },
            // Brand Light
            "brand-light": {
                50: "#C6EBD7",
                100: "#B8E5CC",
                200: "#AAE0C2",
                300: "#9CDBB8",
                400: "#8DD6AE",
                500: "#7FD1A4",
                600: "#71CC9A",
                700: "#63C790",
                800: "#55C286",
                900: "#47BC7C",
            },
        },
        extend: {
            fontFamily: {
                sans: ["Poppins", "sans-serif"],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
