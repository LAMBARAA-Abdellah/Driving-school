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
      {
        path: '/chat',
        component: () => import('@/components/DashboardPage/chat.vue'),
      },
      {
        path: '/seance',
        component: () => import('@/components/DashboardPage/Seance/addSeance.vue')
      },
      {
        path: '/seance/:id',
        component: () => import('@/components/DashboardPage/Seance/detail.vue')
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
  if (to.path === '/Login') {
    if (VueCookies.get('role')) {
      return router.push('/Dashboard')
    }
  } if (to.path === '/Dashboard' && VueCookies.get('role') === 'Utilisateur') {
    if (VueCookies.get('role', 'Utilisateur')) {
      return router.push('/students')
    }
  }if (to.path === '/Personnels' && VueCookies.get('role') === 'Utilisateur') {
    if (VueCookies.get('role', 'Utilisateur')) {
      return router.push('/students')
    }
  }
if (to.path === '/Archieve' && VueCookies.get('role') === 'Utilisateur') {
  if (VueCookies.get('role', 'Utilisateur')) {
    return router.push('/students')
  }
}
  


});
export default router
