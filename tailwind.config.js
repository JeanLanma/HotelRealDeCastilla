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
      },
    },
  },
  plugins: [],
}

