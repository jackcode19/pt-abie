/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
    // "node_modules/flowbite-react/lib/esm/**/*.js",
  ],
 theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '0rem',
        lg: "2rem"
      },
    },
    extend: {
      colors: {
        main: '#b91c1c',
        dark: '#020617',
        secondary: '#475569',
      },
      screens: {
      'sm': '640px',
      'md': '768px',
      '2xl': '990px',
      },
    },
  },
  plugins: [],
}