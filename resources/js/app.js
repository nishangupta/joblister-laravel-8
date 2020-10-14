require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
Vue.use(VueRouter);

import routes from "./routes";
const router = new VueRouter({
    routes,
    mode: "hash"
});

Vue.component(
    "app-component",
    require("./components/AppComponent.vue").default
);

const app = new Vue({
    el: "#app",
    router
});
