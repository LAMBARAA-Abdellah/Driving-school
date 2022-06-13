import HomePageVue from '@/components/HomePage.vue'
import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import VueCookies from 'vue-cookies'






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

    children: [
      {
        path: '/Dashboard/',
        component: () => import('@/components/DashboardPage/Dashboard.vue'),
      },

      {
        path: '/Monitors',
        component: () => import('@/components/DashboardPage/Monitor.vue'),
      },
      {
        path: '/cars',
        component: () => import('@/components/DashboardPage/Cars.vue'),
      },
      {
        path: '/AddCar',
        component: () => import('@/components/DashboardPage/AddCar.vue'),
      },
      {
        path: '/detailVoiture/:id',
        component: () => import('@/components/DashboardPage/detailVoiture.vue'),
      },
      {
        path: '/updateCar/:id',
        component: () => import('@/components/DashboardPage/updateCar.vue'),
      },
      {
        path: '/Students',
        component: () => import('@/components/DashboardPage/Student.vue'),
      },
      {
        path: '/AddStudent',
        component: () => import('@/components/DashboardPage/AddStudent.vue'),
      },
      {
        path: '/UpdateStudent/:id',
        component: () => import('@/components/DashboardPage/updateStudent.vue'),
      },
      {
        path: '/detailStudent/:id',
        component: () => import('@/components/DashboardPage/detailStudent.vue'),
      },
      {
        path: '/tranche/:id',
        component: () => import('@/components/DashboardPage/AddTranche.vue'),
      },
      {
        path: '/Archieves',
        component: () => import('@/components/DashboardPage/Archieve.vue'),
      },

      {
        path: '/Personnels',
        component: () => import('@/components/DashboardPage/Personnel.vue'),
      },
      {
        path: '/AddPersonnel',
        component: () => import('@/components/DashboardPage/AddPersonnel.vue'),
      },
      {
        path: '/detailPersonnel/:id',
        component: () => import('@/components/DashboardPage/detailPersonnel.vue'),
      },
      {
        path: '/updatePersonnel/:id',
        component: () => import('@/components/DashboardPage/updatePersonnel.vue'),
      },

      {
        path: '/AddMonitor',
        component: () => import('@/components/DashboardPage/AddMonitor.vue'),
      },
      {
        path: '/UpdateMonitor/:id',
        component: () => import('@/components/DashboardPage/UpdateMonitor.vue'),
      },
      {
        path: '/detailmonitor/:id',
        component: () => import('@/components/DashboardPage/detailMonitor.vue'),
      },




    ]
  },
  {
    path: '/Login',
    component: () => import('@/components/auth/Login.vue'),
  },
  {
    path: '/chart',
    component: () => import('@/components/DashboardPage/chart.vue'),
  },





]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})
router.beforeEach((to, from) => {
  // check if path is in children paths of dashboard


  //if user is not logged in and tries to access dashboard page and cookies is not set
 
  //if user is  logged in and tries to access login page 
  if (to.path === '/Login') {
    if (VueCookies.get('role')) {
      return router.push('/Dashboard')
    }
  }

});
export default router
