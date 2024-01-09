/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.php'],
  darkMode: 'class',
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#38bdf8',
        secondary: '#64748b',
        tiga: '#042f2e',
        clieny: '#0c4a6e',
      },

      screens: {
        '2xl': '1320px'

      },
    },
  },
  plugins: [],
}

