require("./bootstrap");

window.Vue = require("vue");
Vue.component(
    "job-component",
    require("./components/JobComponent.vue").default
);
const app = new Vue({
    el: "#app"
});
