/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        'bebas-neue': ['Bebas Neue', 'sans-serif'],
      },
      backgroundColor: {
        'netflix-red': '#e50914',
      },
      textColor: {
        'netflix-red': '#e50914',
      },
      screens:{
        'mdlg': '860px',
        // => @media (min-width:860px) {...}
        '1.5xl': '1400px',
        // => @media (min-width:1400px) {...}
        '2.5xl': '1650px',
        // => @media (min-width:1650px) {...}
        '3xl': '1920px',
        // => @media (min-width:1920px) {...}
        '4xl': '2260px',
        // => @media (min-width:2260px) {...}
      },
      aspectRatio: {
        '2/1': '2 / 1',
        '2/3': '2 / 3',
      },
      height: {
        'screen-70': '70vh',
      },
    },
  },
  plugins: [],
}

