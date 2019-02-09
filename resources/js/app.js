
require('./bootstrap');
import 'es6-promise/auto'
import VueAuth from '@websanova/vue-auth'
import VueAxios from 'vue-axios'
import Vue from 'vue'
import StudentCard from './components/StudentCard.vue'
import App from './App.vue'
import router from './routes'
import VueRouter from 'vue-router';
import Form from './utilities/Form.js'
import auth from './auth'
window.Form = Form

Vue.router = router
Vue.use(VueRouter)
Vue.component('StudentCard', StudentCard)

Vue.use(VueAxios, axios)
Vue.use(VueAuth, auth)

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
