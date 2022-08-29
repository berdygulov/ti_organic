module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
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
            gap: {
                '7.5': "30px",
            },
            boxShadow: {
                'shadow': "0px 5px 30px 5px rgba(0, 60, 68, 0.1)"
            },
            flexBasis: {
                '30': "30%",
                '60': "60%",
                '70': "70%",
            },
            fontSize: {
                '32': ['32px', '100%'],
                '40': ['40px', '100%'],
                '56': ['56px', '100%'],
                '64': ['64px', '100%'],
            },
            lineHeight: {
                '150': "150%",
            },
            margin: {
                '1.1': "5px",
                '1.6': "7px",
                '3.9': "15px",
                '6.5': "25px",
                '7.5': "30px",
                '12.5': "50px",
                '12.9': "55px",
                '15': "60px",
                '23': "90px",
                '25': "100px",
                '29': "120px",
                '33': "130px"
            },
            padding: {
                '1.1': "5px",
                '1.6': "7px",
                '3.9': "15px",
                '6.5': "25px",
                '7.5': "30px",
                '8.5': "35px",
                '12.5': "50px",
                '12.9': "55px",
                '15': "60px",
                '23': "90px",
                '25': "100px",
                '29': "120px",
                '33': "130px"
            },
            colors: {
                'black': "#000000",
                'red': "#f1564c",
                'yellow': "#F8BC4C",
                'white': "#ffffff",
                'white-2': "#F2F3F6",
                'blue': "#7B88A8",
                'blue-dark': "#1e2b4c",
                'green': "#003C44",
                'yellow-extra-light': "#FFFBF0",
                'gray-1': "#D9D9D9",
                'gray-2': "#4F4F4F",
                'gray-3': "#828282",
            },
        },
    },
    plugins: [],
}
