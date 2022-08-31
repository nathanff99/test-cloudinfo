const axios = require('axios')

export default {
    getPosts({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get(`/posts`)
                .then(response => {
                    commit('STORE', { key: 'posts', value: response.data })
                    resolve(response.data)
                })
                .catch(error => {
                    reject(error)
                })
        })
    }
}