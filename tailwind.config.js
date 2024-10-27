/** @type {import('tailwindcss').Config} */
const withMT = require("@material-tailwind/html/utils/withMT");

module.exports = withMT({
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens: {
        sm: { max: "640px" },
        md: { min: "641px", max: "1023px" },
        lg: { min: "1024px", max: "1945px" },
      },
      colors: {
        green: {
          10: "#254336", 
          30: "#6B8A7A", 
          50: "#008036", 
          70: "#6B8A7A", 
        },
        brown: {
          10: "#B7B597"
        }
      },
      backgroundImage: {
        'footer': "url('/public/assets/image/footer/bg-footer.png')", 
      },
    },
  },
  plugins: [],
});
