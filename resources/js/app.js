
require('./bootstrap');
require('./custom');

// Vue Js...
// window.Vue = require('vue');
import Vue from 'vue';
// Globally use Vue Js...
window.Vue = Vue;

// Vue Router...
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Vue Components Routes path...
import {routes} from './routes/routes';
const router = new VueRouter({
    mode: 'history',
    routes,

});

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// V-Form validation plugin...
import { Form, HasError, AlertError } from 'vform';
// Globally Use V-Form...
window.Form = Form;

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

// Sweet Alert2 ES6 Modules or TypeScript...
import Swal from 'sweetalert2';
window.Swal = Swal;




const app = new Vue({
    router,

}).$mount('#app');


