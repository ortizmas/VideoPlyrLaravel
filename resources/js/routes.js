import Vue from 'vue'
import VueRouter  from 'vue-router'

Vue.use(VueRouter )

export default new VueRouter ({
	routes: [
        {
            path: '/',
            name: 'home',
            component: () => import('./views/Home')
        },
        {
            path: '/usuarios',
            name: 'usuarios',
            component: () => import('./views/Home')
        },
        {
            path: '/blog',
            name: 'blog',
            component: () => import('./views/Blog')
        },
        {
            path: '/users/:slug',
            name: 'users',
            component: () => import('./views/User'),
            props: true
        },
        {
            path: '/post/:slug',
            name: 'post',
            component: () => import('./views/Post'),
            props: true
        },
        {
            path: '/video/:id',
            name: 'video',
            component: () => import('./views/videos/Video'),
            props: true
        },
        {
            path: '*',
            component: () => import('./views/404')
        }   
    ],
    mode: 'history', //Evita que aparesca # nas rutas #/home, #/user, etc
    scrollBehavior() {
		return {x:0, y:0}
	}
})
