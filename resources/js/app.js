require("./bootstrap");

window.Vue = require("vue");

require("./progressbar");

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
Vue.component("pagination", require("laravel-vue-pagination"));

const app = new Vue({
    el: "#app",
    router
});
