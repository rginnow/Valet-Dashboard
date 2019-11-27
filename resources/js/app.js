import './bootstrap';
import Vue from 'vue';
import VueRouter from 'vue-router'
import router from './router'

import App from './components/App';

window.Vue = Vue;

Vue.router = router;
Vue.use(VueRouter);

Vue.component('index', App);

// START VUE
const app = new Vue({
    el: '#app',
    router
});
