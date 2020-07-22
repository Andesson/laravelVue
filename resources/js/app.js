

require('./bootstrap');

window.Vue = require('vue');

import router from './router'
import Vuetify from '../plugins/vuetify';

//layout
Vue.component('main-component', require('./components/layout/layoutComponent.vue').default);

// import Form from './Form';
// window.Form = Form;

const app = new Vue({
    vuetify: Vuetify,
    el: '#app',
    router
});
