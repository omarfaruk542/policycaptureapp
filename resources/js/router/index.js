import Axios from "axios";
import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: "Login",
        props: true,
        component: () =>
            import(/* webpackChunkName: "Login" */ "../views/auth/Login.vue"),
    },
    {
        path: "/dashboard",
        name: "Dashboard",
        props: true,
        component: () =>
            import(
                /* webpackChunkName: "Dashboard" */ "../views/Dashboard.vue"
            ),
    },
    {
        path: "/questioner",
        name: "Questioner",
        props: true,
        component: () =>
            import(
                /* webpackChunkName: "Questioner" */ "../views/Questioner.vue"
            ),
    },
];

const router = new VueRouter({
    mode: "history",
    routes,
});

export default router;
