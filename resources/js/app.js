require('./bootstrap');

import { createApp } from "vue";
import PostIndex from './components/Index'

const app = createApp({})
app.component('post-index',PostIndex)
app.mount('#app')

