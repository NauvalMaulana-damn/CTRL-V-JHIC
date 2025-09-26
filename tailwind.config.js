export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.ts",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                customRed: '#FD5353',
                customOrange: '#E17626',
                customBlue: '#2492D1',
                customPink: '#FD467E',
                customInsta: '#E1306C',
                darkGray: '#222325',
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                inter: ['Inter', 'sans-serif'],
            },
        }
    },
}
