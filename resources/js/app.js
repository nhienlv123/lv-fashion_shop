/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import App from './App';
import VueRouter from 'vue-router';
import HomeComponent from "./components/HomeComponent.vue"
import ShopComponent from "./components/ShopComponent.vue"
import SingleComponent from "./components/SingleComponent.vue"
import Vue from 'vue';

Vue.use(VueRouter);

const routes= [
    {
        path: '/',
        name: 'home',
        component: HomeComponent
    },
    {
        path: '/shop',
        name: 'shop',
        component: ShopComponent
    },
    {
        path: '/single',
        name: 'single',
        component: SingleComponent
    },
]

const router = new VueRouter({
    mode: 'history',
    routes
})

const app = new Vue( Vue.util.extend({router}, App)).$mount('#app');
