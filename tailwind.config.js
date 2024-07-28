/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./vendor/rawilk/filament-quill/resources/css/content.css",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  // In some cases, it is necessary to safelist the root element selector so tailwind
  // doesn't purge everything.
  safelist: [
    'quill-content',
  ],
  theme: {
    extend: {
      backgroundImage: {
        'gradient-background': 'linear-gradient(165deg, rgba(0, 0, 0, 0.75), rgba(255, 255, 255, 0), rgba(0, 0, 0, 0.75))',
      },
      colors: {
        "base-color" : "#d97706",
        "background" : "#000000"
      }
    },
  },
  plugins: [
    "tailwindcss/nesting",
    "tailwindcss",
    "autoprefixer"
  ],
}

