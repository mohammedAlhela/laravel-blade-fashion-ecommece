import Vue from "vue";
import Vuex from "vuex";



// ui ++++++++++++++
import shop from "./ui/shop"
// ui ++++++++++++++


Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        shop
    },


});
