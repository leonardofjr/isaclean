
import Bootstrap from './bootstrap.js';

import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './components/App.vue';
import Post from './components/Post.vue';
import NewPost from './components/NewPost.vue';

Vue.use(VueRouter);

const routes = [
    { path: '/', component: App },
    { path: '/posts', component: Post},
    { path: '/new-post', component: NewPost}
]

const router = new VueRouter({
    routes
});

const app = new Vue({

    el: '#app',
    router
});
