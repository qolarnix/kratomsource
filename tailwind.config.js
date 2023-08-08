/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./pages/**/*.php",
        "./components/**/*.php"
    ],
    theme: {
        container: {
            padding: {
                lg: '2rem',
                xl: '6rem'
            }
        },
        fontFamily: {
            'sans': ['Public\\ Sans', 'system-ui'],
        },
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
}