import Vue from 'vue'
import bootstrap from 'bootstrap'

import store from './store'

// Axios
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Core Components
Vue.component('canidelo-navbar', () => import('./components/core/CanideloNavbar.vue'));
Vue.component('canidelo-footer', () => import('./components/core/CanideloFooter.vue'));
Vue.component('canidelo-help', () => import('./components/core/CanideloHelp.vue'));

// Home Components
Vue.component('banner-full-width', () => import('./components/BannerFullWidth.vue'));
Vue.component('search-home', () => import('./components/SearchHome.vue'));
Vue.component('products-home', () => import('./components/ProductsHome.vue'));
Vue.component('blog-home', () => import('./components/BlogHome.vue'));
Vue.component('partners-home', () => import('./components/PartnersHome.vue'));

new Vue({
    el: '#app',
    store
});
