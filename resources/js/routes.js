import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
	routes: [
        {
            path: '/usuarios',
            name: 'home',
            component: require('./views/Home')
        },
        {
            path: '/blog',
            name: 'blog',
            component: require('./views/Blog')
        },
        {
            path: ':slug',
            name: 'users',
            component: require('./views/User'),
            props: true
        },
        {
            path: '*',
            component: require('./views/404')
        }   
    ],
    mode: 'history', //Evita que aparesca # nas rutas #/home, #/user, etc
    scrollBehavior() {
		return {x:0, y:0}
	}
})
