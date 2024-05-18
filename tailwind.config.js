const colors = require('tailwindcss/colors')
/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
    extend: {
        colors: {
           
           'bkg': "rgb(var(--color-bg))",
            'content': "rgb(var(--color-content))",
            'content-bg': "rgb(var(--color-content-bg))",
           'textColor': "rgb(var(--color-text))",

        },
    },
    },
    plugins: [require( 'daisyui', "@tailwindcss/forms")],



};
