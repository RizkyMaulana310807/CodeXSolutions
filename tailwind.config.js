/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    "index.php",
    "login.php",
    "detail.php",
    "user-panel/*.php",
    "admin-panel/*.php",
  ],
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
        'rd': '#F5A5A5',
        'gr': '#A5F5A5',

        'bld': '#8BB3E0',
        'pkd': '#D76A8A',
        'yld': '#D6A639',
        'rdd': '#D74B4B	',
        'grd': '#66B266',

        'blb': '#C1E0FF',
        'pkb': '#FFB2C6',
        'ylb': '#FFE58A',
        'rdb': '#FF5A5A	',
        'grb': '#99CC99	',
      },
      screens: {
        xxs : "320px",
        xs: "640px"
      },
      boxShadow: {
        'keycaps-bl': '0px 10px 1px rgba(153, 196, 226, 0.8)',  // Biru lebih gelap
        'keycaps-pk': '0px 10px 1px rgba(248, 141, 173, 0.8)',    // Pink lebih gelap
        'keycaps-yl': '0px 10px 1px rgba(250, 199, 72, 0.8)',   // Kuning lebih gelap
        'keycaps-gr': '0px 10px 1px #66B266',
        'keycaps-rd': '0px 10px 1px #D74B4B',
        'active-bl': '0px 5px 1px rgba(153, 196, 226, 0.8)',
        'active-pk': '0px 5px 1px rgba(248, 141, 173, 0.8)',
        'active-yl': '0px 5px 1px rgba(250, 199, 72, 0.8)',
        'active-gr': '0px 5px 1px #66B266',
        'active-rd': '0px 5px 1px #D74B4B',
        'none-keycaps': '0px 0px 0px rgba(0, 0, 0, 0',
      },
      keyframes: {
        roundingdrk: {
          '0%': { 
            borderTop: '2px solid #ffffff',
            borderRight: '2px solid transparent',
            borderBottom: '2px solid transparent',
            borderLeft: '2px solid transparent',
            // transform: 'rotate(0deg)'
          },
          '25%': { 
            borderTop: '2px solid transparent',
            borderRight: '2px solid #ffffff',
            borderBottom: '2px solid transparent',
            borderLeft: '2px solid transparent',
            // transform: 'rotate(90deg)'
          },
          '50%': { 
            borderTop: '2px solid transparent',
            borderRight: '2px solid transparent',
            borderBottom: '2px solid #ffffff',
            borderLeft: '2px solid transparent',
            // transform: 'rotate(180deg)'
          },
          '75%': { 
            borderTop: '2px solid transparent',
            borderRight: '2px solid transparent',
            borderBottom: '2px solid transparent',
            borderLeft: '2px solid #ffffff',
            // transform: 'rotate(270deg)'
          },
          '100%': { 
            borderTop: '2px solid #ffffff',
            borderRight: '2px solid transparent',
            borderBottom: '2px solid transparent',
            borderLeft: '2px solid transparent',
            // transform: 'rotate(360deg)'
          }
        },
        roundingbl: {
          '0%': { 
            borderTop: '2px solid #ABDAFC',
            borderRight: '2px solid transparent',
            borderBottom: '2px solid transparent',
            borderLeft: '2px solid transparent',
            // transform: 'rotate(0deg)'
          },
          '25%': { 
            borderTop: '2px solid transparent',
            borderRight: '2px solid #ABDAFC',
            borderBottom: '2px solid transparent',
            borderLeft: '2px solid transparent',
            // transform: 'rotate(90deg)'
          },
          '50%': { 
            borderTop: '2px solid transparent',
            borderRight: '2px solid transparent',
            borderBottom: '2px solid #ABDAFC',
            borderLeft: '2px solid transparent',
            // transform: 'rotate(180deg)'
          },
          '75%': { 
            borderTop: '2px solid transparent',
            borderRight: '2px solid transparent',
            borderBottom: '2px solid transparent',
            borderLeft: '2px solid #ABDAFC',
            // transform: 'rotate(270deg)'
          },
          '100%': { 
            borderTop: '2px solid #ABDAFC',
            borderRight: '2px solid transparent',
            borderBottom: '2px solid transparent',
            borderLeft: '2px solid transparent',
            // transform: 'rotate(360deg)'
          }
        },
      },
      animation: {
        "roundingbl": 'roundingbl .25s ease-in-out infinite',
        "roundingdrk": 'roundingdrk .25s ease-in-out infinite',
      },
    },
  },
  plugins: [],
}

