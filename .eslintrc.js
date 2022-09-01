module.exports = {
    extends: [
      'plugin:vue/recommended'
    ],
    rules: {
        'quotes': [2, 'single', { 'avoidEscape': true }],
        'semi': [ 'error', 'never' ],
        'comma-dangle': ['error', 'never']
    }
  }