/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        color:{
          'blue500':"#20479B",
          'black500':"#7D8792",
        },
        backgroundImage: {
            'hero-pattern': "url('/img/bglogin.png')",
          }
      },
    },
    plugins: [],
  }
  