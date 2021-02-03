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
        component: () => import( /* webpackChunkName: "home" */ './vue/layout/Home.vue'),
    },
    {
        path: "/login",
        name: "login",
        component: () => import( /* webpackChunkName: "login" */ './vue/layout/Login.vue'),
    },
    {
        path: '/dashboard',
        component: () => import( /* webpackChunkName: "dashboard-master" */ './vue/Dashboard-Master.vue'),
        children: [{
            title: 'Dashboard',
            path: '/',
            name: 'dashboard',
            component: () => import( /* webpackChunkName: "dashboard" */ './vue/layout/Dashboard.vue'),
        }, ]
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
