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
    extend: {},
  },
  plugins: [
    "tailwindcss/nesting",
    "tailwindcss",
    "autoprefixer"
  ],
}

