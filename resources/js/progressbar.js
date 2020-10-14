import VueProgressBar from "vue-progressbar";

Vue.use(VueProgressBar, {
    color: "rgb(143, 255, 199)",
    failedColor: "red",
    height: "4px",
    transition: {
        speed: "0.4s",
        opacity: "0.6s",
        termination: 300
    }
});
