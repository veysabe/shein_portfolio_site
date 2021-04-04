import vueRouter from "vue-router";
import Vue from "vue";

Vue.use(vueRouter);

import Index from "./views/Index"
import Login from "./views/Login";
import Dashboard from "./components/Dashboard";

const routes = [
    {
        path: "/",
        component: Index
    },
    {
        path: "/login",
        component: Login
    },
    {
        path: "/dashboard",
        component: Dashboard,
        name: "Dashboard"
    }
];

export default new vueRouter({
    mode: "history",
    routes
})
