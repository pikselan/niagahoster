require("./bootstrap");
require("@fortawesome/fontawesome-free/js/all.min");

window.Vue = require("vue");

import VueRouter from "vue-router";
import VueAxios from "vue-axios";
import Axios from "axios";

Vue.use(VueRouter, VueAxios, Axios);

import App from "./components/App.vue";
import Landing from "./components/Landing.vue";
import NotFound from "./components/NotFound.vue";

const routes = [
    {
        name: "landing",
        path: "/",
        component: Landing
    },
    {
        path: "/notfound",
        component: NotFound
    },
    { path: "*", redirect: "/notfound" }
];

const router = new VueRouter({ mode: "history", routes: routes });
new Vue(Vue.util.extend({ router }, App)).$mount("#app");
