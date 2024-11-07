/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.php"],
  theme: {
    extend: {
      fontFamily: {
        bebas: ['"Bebas Neue"', 'cursive'],
        bona: ['Bona Nova SC', 'serif'],
      },
      screens: {
        xxs : "320px",
        xs: "640px"
      }
    },
  },
  plugins: [],
}

