import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Barlow Condensed', ...defaultTheme.fontFamily.sans],
                script: ['Corinthia', 'cursive'],
                display: ['Anton', 'Barlow Condensed', 'sans-serif'],
            },
            colors: {
                brand: {
                    blue: '#003B73',
                    'blue-dark': '#002952',
                    'blue-light': '#0060B9',
                    orange: '#F7941D',
                    'orange-dark': '#E07A0C',
                    yellow: '#FFC220',
                    gray: '#F5F5F5',
                },
            },
        },
    },

    plugins: [forms],
};
