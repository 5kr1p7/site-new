
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import 'babel-polyfill'
import Vue from 'vue';
import Vuetify from 'vuetify';
import VueRouter from 'vue-router';
import VueResource  from 'vue-resource';

import en from 'vuetify/es5/locale/en'
import ru from 'vuetify/es5/locale/ru'

Vue.use(VueRouter)
Vue.use(VueResource)
Vue.use(Vuetify, { lang: { locales: { en, ru }, current: 'ru' }})


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// ----------------------------

import IndexPage from './views/IndexPage'
import ContactPage from './views/ContactPage'


const routes = [
    { path: '/', name: 'index', component: IndexPage },
    { path: '/contacts', name: 'contacts', component: ContactPage },

    { path: '*', redirect: '/' },
];

// ----------------------------

const router = new VueRouter({
    mode: 'history',
    routes: routes
});



const app = new Vue({
    el: '#app',
    router
});
