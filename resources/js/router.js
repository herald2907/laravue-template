import {
    createWebHistory,
    createRouter
} from "vue-router";

import Home from "./vue/layout/Home.vue";
import Dashboard from "./vue/layout/Dashboard.vue";
import Login from "./vue/layout/Login.vue";
import DashboardMaster from "./vue/Dashboard-Master.vue";

const routes = [{
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/login",
        name: "login",
        component: Login,
    },
    {
        path: '/',
        component: DashboardMaster,
        children: [{
            title: 'Dashboard',
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard
        }, ]
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
