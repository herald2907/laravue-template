import {
    createWebHistory,
    createRouter
} from "vue-router";


const routes = [{
        path: "/",
        name: "Home",
        component: () => import( /* webpackChunkName: "home" */ '../pages/Home.vue'),
    },
    {
        path: "/login",
        name: "login",
        component: () => import( /* webpackChunkName: "login" */ '../pages/Login.vue'),
    },
    {
        path: '/',
        component: () => import( /* webpackChunkName: "dashboard-master" */ '../layout/Dashboard-Master.vue'),

        children: [{
            title: 'Dashboard',
            path: '/dashboard',
            name: 'dashboard',
            component: () => import( /* webpackChunkName: "dashboard" */ '../pages/Dashboard.vue'),
        }, ]
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,

});


export default router;
