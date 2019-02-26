
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/*
require('./dynamic-dropdown');
*/

window.Vue = require('vue');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('home', require('./components/Dashboard.vue'));

Vue.component('select-category', require('./components/modal/category.vue'));
Vue.component('select-product', require('./components/modal/product.vue'));
Vue.component('form-view', require('./components/Login.vue'));
Vue.component('register-view', require('./components/Register.vue'));
Vue.component('side-view', require('./components/sidebar.vue'));
Vue.component('header-view', require('./components/header.vue'));

Vue.component('header-down', require('./components/headerDown.vue'));

Vue.component('stock-view', require('./components/Stock.vue'))
Vue.component('stock-edit', require('./components/stockEdit.vue'))

Vue.component('trans-edit', require('./components/transEdit.vue'))
Vue.component('manage-category', require('./components/category.vue'));
Vue.component('manage-product', require('./components/product.vue'));
Vue.component('pay-due', require('./components/payDue.vue'));

Vue.component('customer-view', require('./components/customer.vue'));



Vue.component('stock-available', require('./components/stockAvailable.vue'));

Vue.component('stock-history', require('./components/stockHistory.vue'));

Vue.component('user-profile', require('./components/userprofile.vue'));

Vue.component('sell-view', require('./components/Sell.vue'));

Vue.component('invoice-view', require('./components/invoice.vue'));

Vue.component('team-members', require('./components/teamMembers.vue'));


const app = new Vue({
    el: '#app',

});


Vue.filter(`formatDate`, function(value){
    if(value){
        return moment(String(value)).format(`Do/MMMM/YYYY hh:mm`)
    }
});