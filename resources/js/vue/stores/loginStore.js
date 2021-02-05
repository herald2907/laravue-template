import {
    computed,
    reactive
} from 'vue'
import RequestApi from '../api/RequestApi';

const state = reactive({

})

const getters = reactive({

})

const actions = {
    async loginUser(params) {
        await RequestApi.createSession();
        const {data} = await RequestApi.login(params);
        return data;
        /* localStorage.setItem('auth', data); */

    }
}

export default {
    state,
    getters,
    ...actions
}
