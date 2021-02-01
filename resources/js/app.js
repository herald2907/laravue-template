require('./bootstrap');

import { createApp } from 'vue'
import App from './vue/App.vue'
import Navbar from './vue/Navbar.vue'
import router from './router' // <---

createApp(Navbar).mount('#navbar')
createApp(App).use(router).mount('#app')