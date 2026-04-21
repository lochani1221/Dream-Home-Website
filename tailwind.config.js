import defaultTheme from 'tailwindcss/defaultTheme'

export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
    brand: "#2A1B12",
     accent: "#4F3527",
      light: "#DDC7BB", 
      lightwhite: "#FEF7F2",
        
      },
    },
  },
  plugins: [],
}
