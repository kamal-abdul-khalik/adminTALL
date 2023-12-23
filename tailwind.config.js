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
                info: "#06b6d4",
                warning: "#f59e0b",
                danger: "#f43f5e",
                disable: "#94a3b8",
            },

            textColors: {
                primary: "#6366f1",
                secondary: "#64748b",
                success: "#22c55e",
                info: "#06b6d4",
                warning: "#f59e0b",
                danger: "#f43f5e",
                disable: "#94a3b8",
            },
        },
    },
    extend: {
        fontFamily: {
            sans: ["Figtree", ...defaultTheme.fontFamily.sans],
        },
    },
};
