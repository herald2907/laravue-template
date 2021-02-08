import {
    readonly,
    reactive
} from 'vue'
const state = reactive({
    authenticate: null
})

const getAuthentication = () => {
    return JSON.parse(localStorage.getItem('auth_token'));
}


export default {
    state: readonly(true),
    getAuthentication,
}
