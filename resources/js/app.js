require('./bootstrap');

import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

import App from './components/App'
import Index from './components/Index'
import Categories from './components/Category'
import Posts from './components/Posts'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Index',
            component: Index
        },
        {
            path: '/categories',
            name: 'Categories',
            component: Categories
        },
        {
            path: '/posts',
            name: 'Posts',
            component: Posts
        },
    ]
})
// Vue.component('main-index',require('./components/Index').default)

const app = new Vue({
    el: '#app',
    components:{ App },
    router
})

// import { createApp } from "vue";
// import PostIndex from './components/Index'
// import CategoryIndex from './components/Category'
// import PostsIndex from './components/Posts'
//
// const app = createApp({})
// app.component('post-index',PostIndex)
// app.mount('#app')
//
// app.component('category-index',CategoryIndex)
// app.mount('#categories')
//
// app.component('posts-index',PostsIndex)
// app.mount('#posts')
