/** @type {import('tailwindcss').Config} */
module.exports = {
    theme: {
      screens: {
        'sm': '420px',
        // => @media (min-width:200px and max-width: 440px) { ... }
  
        'lg': '1420px',
        // => @media (min-width: 821px and max-width: 1920px) { ... }
      },
    }
  }