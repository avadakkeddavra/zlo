
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('header-component',require('./components/layouts/HeaderComponent.vue'));
Vue.component('register-component', require('./components/RegisterComponent.vue'));
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('posts-component', require('./components/PostsComponent.vue'));
Vue.component('single-post-component', require('./components/SinglePostComponent.vue'));

//Vue.component('-component', require('./components/'));
Vue.component('create-post-component', require('./components/CreatePostComponent'));
Vue.component('comments-component', require('./components/comments/CommentsLayoutComponent'));
Vue.component('single-comment-component', require('./components/comments/SingleCommentComponent'));
Vue.component('rate-box-component', require('./components/post-boxes/RateBoxComponent'));
Vue.component('bids-box-component', require('./components/post-boxes/BidsBoxComponent'));
Vue.component('info-box-component', require('./components/post-boxes/InfoBoxComponent'));
Vue.component('images-box-component', require('./components/post-boxes/ImagesBoxComponent'));
Vue.component('author-box-component', require('./components/post-boxes/AuhtorBoxComponent.vue'));
Vue.component('price-box-component', require('./components/post-boxes/PriceBoxComponent.vue'));



const app = new Vue({
    el: '#app',
    mounted(){
        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems,{});

    }
});
