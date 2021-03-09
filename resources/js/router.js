import vueRouter from "vue-router";
import Vue from "vue";

Vue.use(vueRouter);

import Index from "./views/Index"
import Portfolio from "./views/Portfolio";

const routes = [
    {
        path: "/",
        component: Index
    },
    {
        path: "/portfolio",
        component: Portfolio
    },
];

export default new vueRouter({
    mode: "history",
    routes
})
