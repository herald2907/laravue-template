import {
    reactive
} from 'vue'
import RequestApi from '../api/RequestApi';
const state = reactive({
    statue:true
})

const getters = reactive({

})

const actions = {

    async dashboardApi() {

        const {
            data
        } = await RequestApi.dashboard();
        console.log(data);
        return false;
    }
}

export default {
    state,
    getters,
    ...actions
}
