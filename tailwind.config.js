module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {},
        screens: {
            'sm': '576px',
            // => @media (min-width: 576px) { ... }

            'md': '768px',
            // => @media (min-width: 768px) { ... }

            'lg': '992px',
            // => @media (min-width: 992px) { ... }

            'xl': '1200px',
            // => @media (min-width: 1200px) { ... }

            '2xl': '1400px',
            // => @media (min-width: 1400px) { ... }
        },
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                xl: '5rem',
            },
        },
        extend: {
            colors: {
                'red': "#ed1c24",
            },
        },
    },
    plugins: [],
}
