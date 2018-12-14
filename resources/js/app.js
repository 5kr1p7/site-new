
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import 'babel-polyfill'

import App from './components/App.vue'
import Vue from 'vue'
import router from './router'
import Vuetify from 'vuetify'
import VueResource  from 'vue-resource'

import en from 'vuetify/es5/locale/en'
import ru from 'vuetify/es5/locale/ru'


Vue.use(VueResource)
Vue.use(Vuetify, { lang: { locales: { en, ru }, current: 'ru' }})

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

// ----------------------------



export default new Vue({
    router,
    render: h => h(App)
});
