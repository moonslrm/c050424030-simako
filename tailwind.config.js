module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
    './vendor/filament/**/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50:  '#f5fbff',
          100: '#e6f4ff',
          300: '#66b3ff',
          500: '#0077cc', // utama — ubah sesuai keinginan
          700: '#005c99',
        },
        accent: {
          500: '#ff7a59',
        }
      },
      fontFamily: {
        inter: ['Inter', 'ui-sans-serif', 'system-ui'],
      },
    },
  },
  plugins: [],
}
