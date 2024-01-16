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
            colors: {
                // Customize your colors here
                primary: '#1E40AF',
                secondary: '#FFED4A',
                // Add more colors as needed
            },
            fontFamily: {
                // Customize your fonts here
                body: ['Roboto', 'sans-serif'],
                heading: ['Montserrat', 'sans-serif'],
                // Add more fonts as needed
            },
        },
    },

    plugins: [forms],
};
