module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      padding : {
        '0.3': '0.1rem'
      },
      width: {
        '1/7': '14.2857143%',
        '2/7': '28.5714286%',
        '3/7': '42.8571429%',
        '4/7': '57.1428571%',
        '5/7': '71.4285714%',
        '6/7': '85.7142857%',
        '30': '7.5rem',
        '100': '60rem',
        '99': '50rem',
        '98': '40rem',
        '97.5': '35rem',
        '97': '30rem',
        '120': '60rem'
      },
      height: {
        '4/7': '57.1428571%',
        '100': '25rem',
        '110': '27.5rem',
        '120': '30rem',
        '140': '35rem',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
