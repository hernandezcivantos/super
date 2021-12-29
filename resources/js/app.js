require('./bootstrap');

window.Vue = require('vue');

Vue.component('landing-main', require('./components/landing/MainComponent.vue').default);
Vue.component('landing-subheader', require('./components/landing/SubheaderComponent.vue').default);

const app = new Vue({
    el: '#app',
});
