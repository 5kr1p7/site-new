import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import IndexPage from './views/IndexPage'
import ContactPage from './views/ContactPage'
import BlogPage from './views/BlogPage'
import PostPage from './views/PostPage'

import AdminIndex from './views/admin/AdminIndex'

import AdminPostsList from './views/admin/AdminPostsList'
import AdminPostCreate from './views/admin/AdminPostCreate'
import AdminPostEdit from './views/admin/AdminPostEdit'


const routes = [
    { path: '/',                 name: 'index',             component: IndexPage },
    { path: '/blog',             name: 'blog',              component: BlogPage },
    { path: '/blog/:slug',       name: 'post',              component: PostPage },
    { path: '/contacts',         name: 'contacts',          component: ContactPage },

    { path: '/admin43', name: 'adminIndex', component: AdminIndex },
    { path: '/admin43/posts', name: 'adminPostsList', component: AdminPostsList },
    { path: '/admin43/posts/new', name: 'adminPostCreate', component: AdminPostCreate },
    { path: '/admin43/posts/edit/:slug', name: 'adminPostEdit', component: AdminPostEdit },

    { path: '*', redirect: '/' },
];

export default new VueRouter({
    mode: 'history',
    routes: routes
});
