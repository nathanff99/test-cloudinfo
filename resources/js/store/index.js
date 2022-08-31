import Vue from 'vue'
import Vuex from 'vuex'

// Modules
import products from './modules/products'
import blog from './modules/blog'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        products,
        blog
    }
})