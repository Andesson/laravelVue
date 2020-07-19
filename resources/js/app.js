

require('./bootstrap');

window.Vue = require('vue');

import Vuetify from '../plugins/vuetify';

//layout
Vue.component('template-component', require('./components/layout/layoutComponent.vue').default);

//user
Vue.component('teste-componente', require('./components/user/newComponent.vue'));

//import Form from './Form';
//window.Form = Form;

const app = new Vue({
    vuetify: Vuetify,
    el: '#app',
});
