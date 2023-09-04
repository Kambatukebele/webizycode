import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                ReadexPro: ["Readex Pro", "sans - serif"],
                NunitoSans: ["Nunito Sans", "sans - serif"],
                Nunito: ["Nunito", "sans - serif"],
            },
            keyframes: {
                SlideInLeft: {
                    "0%": { transform: "translateX(-300px)" },
                    "100%": { transform: "translateX(0)" },
                },
                SlideInRight: {
                    "0%": { transform: "translateX(300px)" },
                    "100%": { transform: "translateX(0)" },
                },
                SlideInBtn: {
                    "0%": { transform: "translateX(-300px)" },
                    "100%": { transform: "translateX(0)" },
                },
                
            },
            animation: {
                SlideInLeft: "SlideInLeft 0.3s ease-in",
                SlideInRight: "SlideInRight 0.5s ease-in",
                SlideInBtn: "SlideInBtn 2s ease-in",
            },
        },
    },

    plugins: [forms],
};
