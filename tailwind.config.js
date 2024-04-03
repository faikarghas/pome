// tailwind.config.js
import typography from '@tailwindcss/typography';
import forms from '@tailwindcss/forms';
import aspectRatio from '@tailwindcss/aspect-ratio';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        montserratExtraBold: ['Montserrat-ExtraBold'],
        montserratMedium: ['Montserrat-Medium'],
        montserratRegular: ['Montserrat-Regular'],
        montExtraLight: ['Mont-ExtraLight'],
        montRegular: ['Mont-Regular'],
        montSemiBold: ['Mont-SemiBold'],
      },
      colors: {
        'pome-black': '#444444',
      },
    },
  },
  plugins: [
    typography,
    forms,
    aspectRatio,
  ],
}