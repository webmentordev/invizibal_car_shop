import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                "1230px": {
                    "max": "1230px"
                },
                "950px": {
                    "max": "950px"
                },
                "900px": {
                    "max": "900px"
                },
                "820px": {
                    "max": "820px"
                },
                "640px": {
                    "max": "640px"
                },
                "610px": {
                    "max": "610px"
                },
                "490px": {
                    "max": "490px"
                }
            },
            colors: {
                "main": "#CB0B17"
            }
        },
    },

    plugins: [forms],
};
