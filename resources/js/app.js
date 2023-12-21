/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// WEB
Vue.component('store-main-component', require('./components/web/store/mainComponent').default);
Vue.component('store-order-page', require('./components/web/store/orderPage').default);


//ADMIN-CONSOLE
    //Store
    Vue.component('admin-store-main', require('./components/admin/store/main').default);
    //Products
    Vue.component('admin-products-list', require('./components/admin/products/list').default);
    Vue.component('admin-prices-list', require('./components/admin/products/prices').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
          // Для создания продукта только для магазина
          isUrlShow:true,
          isTitleShow:true,
          isImageShow:true,
          isDescriptionShow:true,
          isKeyWordsShow:true,
          isProposalShow:true,
          },
    methods: {
        isForStore() {
                this.isUrlShow = !this.isUrlShow;
                this.isTitleShow = !this.isTitleShow;
                this.isImageShow = !this.isImageShow;
                this.isDescriptionShow = !this.isDescriptionShow;
                this.isKeyWordsShow = !this.isKeyWordsShow;
                this.isProposalShow = !this.isProposalShow;
        }
    }
});
