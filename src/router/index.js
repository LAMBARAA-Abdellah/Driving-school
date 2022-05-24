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
  },
  {
    path: '/dashboard/',
    name: 'dashboard',
    component: () => import('../views/DashboardView.vue'),

    children:[
      {
        path:'/Dashboard/',
        component: () => import('@/components/DashboardPage/Dashboard.vue'),
      },

      {
        path:'/Monitors',
        component: () => import('@/components/DashboardPage/Monitor.vue'),
      },
      {
        path:'/cars',
        component: () => import('@/components/DashboardPage/Cars.vue'),
      },
      {
        path:'/Students',
        component: () => import('@/components/DashboardPage/Student.vue'),
        
      }
      ,
      {
        path:'/Archieves',
        component: () => import('@/components/DashboardPage/Archieve.vue'),
      },
      
      {
        path:'/Personnels',
        component: () => import('@/components/DashboardPage/Personnel.vue'),
      },
      { 
        path:'/AddStudent',
        component: () => import('@/components/DashboardPage/AddStudent.vue'),
      },
      
      
    ]
  },
  { 
    path:'/Login',
    component: () => import('@/components/auth/Login.vue'),
  },





  
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
