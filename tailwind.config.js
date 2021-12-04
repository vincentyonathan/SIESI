module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    backgroundColor: theme => ({
      ...theme('colors'),
      'primary': '#E5E5E5',
      'secondary': '#ffed4a',
      'danger': '#F4F5F7',
      'haha' : '#FE705F',
      'btn' : 'BFB6B5',
     }),
    extend: {
      gridTemplateColumns: {
        '16': 'repeat(16, minmax(0, 1fr))',
        '14': 'repeat(14, minmax(0, 1fr))',
        '20': 'repeat(20, minmax(0, 1fr))',
      },
      gridColumn: {
        'span-16': 'span 16 / span 16'
      },
      padding : {
        '0.3': '0.1rem',
        '0.1': '0.05rem'
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
      gridColumnStart: {
        '13': '13',
        '14': '14',
        '15': '15',
        '16': '16',
        '17': '17',
        '18': '18',
        '19': '19',
        '20': '20',
      },
      gridColumnEnd: {
        '13': '13',
        '14': '14',
        '15': '15',
        '16': '16',
        '17': '17',
        '18': '18',
        '19': '19',
        '20': '20',
      },
      textColor: {
        'primary': '#FE705F',
        'secondary': '#A1A1A1',
        'danger': '#e3342f',
      },
      spacing: {
        adapt: '90vh',
        md: '16px',
        lg: '24px',
        xl: '48px',
       },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
