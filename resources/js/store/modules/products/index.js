import actions from './actions'
import mutations from './mutations'
import getters from './getters'

const state = {
    deals: [],
    bestSellers: [],
    suggestions: []
}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,
}