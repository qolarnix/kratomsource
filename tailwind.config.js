/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./pages/**/*.php",
        "./components/**/*.php"
    ],
    theme: {
        container: {
            padding: {
                sm: '0rem',
                md: '0rem',
                lg: '0rem',
                xl: '6rem'
            }
        },
        fontFamily: {
            'display': ['Lora', 'system-ui'],
            'sans': ['Plus\\ Jakarta\\ Sans', 'system-ui'],
        },
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
}