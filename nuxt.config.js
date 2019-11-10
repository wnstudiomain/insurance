module.exports = {
  /*
  ** Headers of the page
  */
  head: {
    // title: 'Бизнес - субботник "Управление со смыслом"',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      {
        hid: 'description',
        name: 'description',
        content: 'Nuxt.js project'
      }
    ],
    modules: [
      '@nuxtjs/axios',
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
    ],
  },
  plugins: [
    { src: '~/plugins/slider.js', ssr: false },
    { src: '~/plugins/vuelidate.js', ssr: true },

  ],
  css: [
    { src: 'bulma', lang: 'sass' },
    '@/assets/css/main.css'
  ],
  modules: [
    '@nuxtjs/axios',
    ['vue-scrollto/nuxt', { offset: -60 }]
  ],
  axios: {
    // proxyHeaders: false
  },
  /*
  ** Customize the progress bar color
  */

  loading: { color: '#3B8070' },
  /*
  ** Build configuration
  */
  build: {
    /*
    ** Run ESLint on save
    */
    extend (config, { isDev, isClient }) {
      if (isDev && isClient) {
        config.module.rules.push({
          enforce: 'pre',
          test: /\.(js|vue)$/,
          loader: 'eslint-loader',
          exclude: /(node_modules)/
        })
      }
    }
  }
}
