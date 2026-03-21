/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.html",
    "./js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        darkblue: '#003A66',
        midblue: '#4C7593',
        navyblue: '#00233D',
        yellow: '#FFD35C',
        coral: '#FF875C',
        darkgrey: '#525053',
        lightgrey: '#CDCBCD',
        backgroundgrey: '#f1f1f1',
        brown: '#6F4930',
        camp_blue: '#007185',
        dark_blue: '#003A66', 
        sunlight_yellow: '#FFD35C',
        goldenrod: '#DAA520',
        sky_white: '#F5F5F5',
        forest_green: '#258F76',
        slate_gray: '#6B7B8C',
        text_grey: '#212121',
      },
      fontFamily: {
        'sans': ['Open Sans', 'sans-serif'],
        'montserrat': ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [],
}