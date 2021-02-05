require('./bootstrap');

import {
    createApp
} from 'vue'

import App from './vue/layout/App.vue'
import router from './vue/router/routes'
const app = createApp(App)
app.use(router)
app.config.errorHandler = (err, vm, info) => {

}
app.config.performance = true;
app.mount('#app')
