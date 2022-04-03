require('./bootstrap');

import { createApp } from "vue";
import PostIndex from './components/Index'
import CategoryIndex from './components/Category'
import PostsIndex from './components/Posts'

const app = createApp({})
app.component('post-index',PostIndex)
app.mount('#app')

app.component('category-index',CategoryIndex)
app.mount('#categories')

app.component('posts-index',PostsIndex)
app.mount('#posts')
