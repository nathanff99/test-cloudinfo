import Vue from 'vue'
import bootstrap from 'bootstrap'

// Core Components
Vue.component('navbar', () => import('./components/core/Navbar.vue'));

// Home Components
Vue.component('banner-full-width', () => import('./components/BannerFullWidth.vue'));
Vue.component('search', () => import('./components/Search.vue'));

new Vue({
    el: '#app'
});
