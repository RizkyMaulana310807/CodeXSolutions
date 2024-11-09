/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["index.php"],
  theme: {
    extend: {
      fontFamily: {
        bebas: ['Bebas', 'cursive'],
        passionate: ['passionate', 'serif'],
        luckiestGuy: ['Luckiest Guy', 'sans-serif'],
        sourGummy: ['Sour Gummy', 'cursive'],
      },
      colors: {
        'bl': '#ABDAFC',
        'pk': '#F88DAD',
        'yl': '#FAC748',
        'bld': '#8BB3E0',
        'pkd': '#D76A8A',
        'yld': '#D6A639',
        'blb': '#C1E0FF',
        'pkb': '#FFB2C6',
        'ylb': '#FFE58A',
      },
      screens: {
        xxs : "320px",
        xs: "640px"
      },
      boxShadow: {
        'keycaps-bl': '0px 10px 1px rgba(153, 196, 226, 0.8)',  // Biru lebih gelap
        'keycaps-pk': '0px 10px 1px rgba(248, 141, 173, 0.8)',    // Pink lebih gelap
        'keycaps-yl': '0px 10px 1px rgba(250, 199, 72, 0.8)',   // Kuning lebih gelap
        'active-bl': '0px 5px 1px rgba(153, 196, 226, 0.8)',
        'active-pk': '0px 5px 1px rgba(248, 141, 173, 0.8)',
        'active-yl': '0px 5px 1px rgba(250, 199, 72, 0.8)',
        'none-keycaps': '0px 0px 0px rgba(0, 0, 0, 0',
      },
    },
  },
  plugins: [],
}

