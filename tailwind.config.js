module.exports = {
    theme: {
        extend: {
            inset: {
                '10': '10px',
                '20': '20px',
                '30': '30px',
                '40': '40px',
                '50': '50px',
                '60': '60px',
                '70': '70px',
                '80': '80px',
            },
            colors: {
                primary: '#ff6347'
            },
            minWidth: {
                '1/3': '33.33333333%',
            },
            maxWidth: {
                '1/3': '33.33333333%',
            },
        },
    },
    variants: {
        margin: ['responsive', 'first', 'last', 'hover'],
        borderColor: ['responsive', 'hover', 'focus'],
        borderRadius: ['responsive', 'hover', 'focus'],
        borderWidth: ['responsive', 'hover', 'focus'],
        width: ['responsive', 'hover', 'focus'],
    },
    plugins: [
        require('tailwindcss-transitions')(),
    ]
}
