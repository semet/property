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
                50: "#ff385c",
                100: "#FF224A",
                200: "#FF0C38",
                300: "#F4002D",
                400: "#DE0029",
                500: "#C80025",
                600: "#B20021",
                700: "#9C001D",
                800: "#850018",
                900: "#6F0014",
            },
            // Brand Light
            "brand-light": {
                50: "#FFC6D1",
                100: "#FFB8C5",
                200: "#FFAAB9",
                300: "#FF9CAE",
                400: "#FF8DA2",
                500: "#FF7F97",
                600: "#FF718B",
                700: "#FF637F",
                800: "#FF5574",
                900: "#FF4668",
            },
        },
        extend: {
            fontFamily: {
                sans: ["Poppins", "sans-serif"],
            },
        },
    },
    plugins: [require("flowbite/plugin"), require("@tailwindcss/typography")],
};
