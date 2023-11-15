import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeView from '../views/Tweet/HomeView.vue'
import myProfile from '../views/Tweet/Profile.vue'
import people from '../views/Tweet/Peoples.vue'
import Layout from '../views/Tweet/Layout'
import login from '../views/Login.vue'
import register from '../views/Register.vue'

Vue.use(VueRouter)

const routes = [
  // {
  //   path: '/',
  //   name: 'home',
  //   component: HomeView
  // },
  // {
  //   path: '/login',
  //   name: 'login',
  //   component: login
  // },
  // {
  //   path: '/register',
  //   name: 'register',
  //   component: register
  // },
  // {
  //   path: '/about',
  //   name: 'about',
  //   // route level code-splitting
  //   // this generates a separate chunk (about.[hash].js) for this route
  //   // which is lazy-loaded when the route is visited.
  //   component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  // }
  {
    path: '',
    component: Layout,
    children: [
      {
        path: '',
        name: 'home',
        component: HomeView
      },
      {
        path: '/profile',
        name: 'profile',
        component: myProfile
      },
      {
        path: '/people',
        name: 'people',
        component: people
      },
    ]
  },
  {
    path: '/login',
    name: 'login',
    component: login
  },
  {
    path: '/register',
    name: 'register',
    component: register
  },


]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
