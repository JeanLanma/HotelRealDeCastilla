/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      sans: ['Montserrat', 'sans-serif', 'Playfair Display', 'serif']
    },
    extend: {
      colors: {
        'primary-blue': "#14274A",
        'acent-blue': "#002DB3",
        'golden-yellow': "#E0B973",
        'primary-orange': "#B35300",
        'primary-dark': "#1C1C1C",
        'primary-gray': "#A3A3A3",
        'primary-light': "#F9F9F9",
        'primary-bronze': "#7C6A46",
      },
    },
  },
  plugins: [],
}

