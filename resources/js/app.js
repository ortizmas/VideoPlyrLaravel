/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//https://www.youtube.com/watch?v=8M4HF1U_DH0&list=PLhCiuvlix-rSGTvItDLXyGwyjoNz-CnMJ&index=13

import router  from './routes.js'
import plyr from './plyr.js'

//import VuePlyr from "vue-plyr";
// import "vue-plyr/dist/vue-plyr.css";
//Vue.use(VuePlyr);

Vue.component('app-component', require('./components/AppComponent.vue').default);
Vue.component('posts', require('./components/PostsComponent.vue').default);

Vue.component('users', require('./components/UsersComponent.vue').default);
Vue.component('infinite',   require('vue-infinite-loading'));

Vue.component('videos-component', require('./components/VideoComponent.vue').default);

//https://bluuweb.github.io/tutorial-laravel/vue/#componente-con-vue-js
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('pages', require('./components/PagesComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



const app = new Vue({
  	el: "#app",
	router,

  	created: function() {
    	this.getUsers();
  	},
  	data: {
    	users: []
  	},
  	methods: {
    	getUsers: function() {
      		var urlUsers = "/users";
      		axios.get(urlUsers).then(response => {
        		this.users = response.data;
      		});
    	}
  	}
});
