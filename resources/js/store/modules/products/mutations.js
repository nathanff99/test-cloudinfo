export default {
    STORE(state, payload) {
        state[payload.key] = payload.value
    }
}