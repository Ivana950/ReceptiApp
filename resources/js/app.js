require('./bootstrap');

import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'


window.Vue = require('vue').default;

Vue.use(Vuetify)

//ADMIN KOMPONENTE

//USER KOMPONENTE


//GLOBALNE KOMPONENTE
Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    vuetify: new Vuetify(),
    el: '#app',
});
