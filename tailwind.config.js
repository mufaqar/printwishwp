// tailwind.config.js

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["/temp-home.php","./template-parts/*.{php,html,js}","./components/*.{php,html,js}","./woocommerce/*.{php,html,js}","./*.{php,html,js}"],
  theme: {
    extend: {
     
      backgroundImage: {
        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
        'gradient-conic':
          'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
      },
      colors: {
        'primary': `var(--primary-color)`,
        'secondary': `var(--secondary-color)`,
        'accent': `var(--accent-color)`,
        'highlight': `var(--highlight-color)`,
        'background': `var(--background-color)`,
      },
      fontFamily: {
        'opensans': ['OpenSans'],
        'roboto': ['Sora'],
      },
      listStyleType: {
        square: 'square',
        roman: 'upper-roman',
      }
    },
  },
  plugins: [],
}