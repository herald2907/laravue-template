import {
    createWebHistory,
    createRouter
} from "vue-router";

import middleware from './middleware';


const routes = [{
        path: "/",
        name: "home",
        beforeEnter: middleware.guest,
        component: () => import( /* webpackChunkName: "home" */ '../pages/Home.vue'),

    },
    {
        path: "/login",
        name: "login",
        beforeEnter: middleware.guest,


        component: () => import( /* webpackChunkName: "login" */ '../pages/Login.vue'),
    },
    {
        path: '/',
        beforeEnter: middleware.user,
        component: () => import( /* webpackChunkName: "dashboard-master" */ '../layout/Dashboard-Master.vue'),

        children: [{
                title: 'Dashboard',
                path: '/dashboard',
                name: 'dashboard',
                component: () => import( /* webpackChunkName: "dashboard" */ '../pages/Dashboard.vue'),
            },
            {
                title: 'Role',
                path: '/role',
                name: 'role.index',
                component: () => import( /* webpackChunkName: "dashboard" */ '../pages/Roles.vue'),
            },
            {
                title: 'Permission',
                path: '/permissions',
                name: 'permission.index',
                component: () => import( /* webpackChunkName: "dashboard" */ '../pages/Permissions.vue'),
            },
            {
                title: 'User',
                path: '/users',
                name: 'user.index',
                component: () => import( /* webpackChunkName: "dashboard" */ '../pages/Users.vue'),
            }

        ]
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,

});


export default router;
