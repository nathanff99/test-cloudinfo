import Vue from 'vue'
import bootstrap from 'bootstrap'

import store from './store'

// Axios
window.axios = require('axios')
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

// Core Components
Vue.component('CanideloNavbar', () => import('./components/core/CanideloNavbar.vue'))
Vue.component('CanideloFooter', () => import('./components/core/CanideloFooter.vue'))
Vue.component('CanideloHelp', () => import('./components/core/CanideloHelp.vue'))

// Home Components
Vue.component('BannerFullWidth', () => import('./components/BannerFullWidth.vue'))
Vue.component('SearchHome', () => import('./components/SearchHome.vue'))
Vue.component('ProductsHome', () => import('./components/ProductsHome.vue'))
Vue.component('BlogHome', () => import('./components/BlogHome.vue'))
Vue.component('PartnersHome', () => import('./components/PartnersHome.vue'))

new Vue({
    el: '#app',
    store
})
