import HomePageVue from '@/components/HomePage.vue'
import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: () => import('../views/HomePage.vue')
  },
  {
    path: '/about',
    name: 'about',

    component: () => import('../views/AboutView.vue')
  },
  {
    path: '/contact',
    name: 'contact',

    component: () => import('../views/ContactView.vue')
  },
  {
    path: '/programe',
    name: 'programe',

    component: () => import('../views/ProgrameView.vue')
  },
  {
    path: '/testimonials',
    name: 'testimonials',
    component: () => import('../views/TestimonialsView.vue')
  }

  
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
