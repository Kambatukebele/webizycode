import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

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
                montserrat: ["Montserrat", "sans-serif"],
            },
            backgroundImage: {
                "hero-upper": "url('/public/assets/images/bg-image.png')",
                "hero-middle": "url('/public/assets/images/ft-bg-2.png')",
                "hero-how-we-work":
                    "url('/public/assets/images/slider-shape-img.png')",
                "hero-footer":
                    "url('/public/assets/images/footer-bg-images.png')",
                "hero-shadow": "url('/assets/images/top-left-shadow-2.png')",
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
