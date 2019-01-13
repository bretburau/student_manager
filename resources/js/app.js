
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/StudentList.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
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

// Set Vue authentication
Vue.use(VueAxios, axios)
// axios.defaults.baseURL = `${process.env.MIX_APP_URL}/api` //didn't work
Vue.use(VueAuth, auth)

console.log(router)
const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
