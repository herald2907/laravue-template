import {
    computed,
    reactive
} from 'vue'
import RequestApi from '../api/RequestApi';
const state = reactive({
    statue: true,
})

const getters = reactive({

})

const actions = {

    async loginUser(params) {

        RequestApi.createSession();
        const {
            data
        } = await RequestApi.login(params);
        if (data.status_code != 500) {
            localStorage.setItem('user', JSON.stringify(data.user));
            return data;
        }
        return data;
    },
    async logoutUser() {

        const {
            data
        } = await RequestApi.logout();
        if (data.status_code != 500) {
            return data.success;
        }
        return false;
    }
}

export default {
    state,
    getters,
    ...actions
}
