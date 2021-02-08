import {
    readonly,
    reactive
} from 'vue'
const state = reactive({
    authenticate: null
})

const getAuthentication = () => {
    return JSON.parse(localStorage.getItem('user'));
}


export default {
    state: readonly(true),
    getAuthentication,
}
