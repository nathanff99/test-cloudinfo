const axios = require('axios')

export default {
    get({ commit }, section) {
        return new Promise((resolve, reject) => {
            axios.get('/products')
                .then(response => {
                    commit('STORE', { key: section, value: response.data })
                    resolve(response.data)
                })
                .catch(error => {
                    reject(error)
                })
        })
    }
}