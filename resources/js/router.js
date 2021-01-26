import {
    createWebHistory,
    createRouter
} from "vue-router";
import Home from "./vue/Home.vue";
import About from "./vue/About.vue";
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
        path: "/about",
        name: "about",
        component: About
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
