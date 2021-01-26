import {
    createWebHistory,
    createRouter
} from "vue-router";
import Home from "./vue/Home.vue";
import Dashboard from "./vue/Dashboard.vue";
import Login from "./vue/Login.vue";

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
        path: "/dashboard",
        name: "dashboard",
        component: Dashboard
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
