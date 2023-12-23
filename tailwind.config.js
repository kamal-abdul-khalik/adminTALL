const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#6366f1",
                secondary: "#64748b",
                success: "#22c55e",
                info: "#0ea5e9",
                warning: "#f59e0b",
                danger: "#f43f5e",
                disable: "#94a3b8",
                dark: "#0f172a",
            },

            textColors: {
                primary: "#6366f1",
                secondary: "#64748b",
                success: "#22c55e",
                info: "#0ea5e9",
                warning: "#f59e0b",
                danger: "#f43f5e",
                disable: "#94a3b8",
                dark: "#0f172a",
            },
        },
    },
    extend: {
        fontFamily: {
            sans: ["Figtree", ...defaultTheme.fontFamily.sans],
        },
    },
};
