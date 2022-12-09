import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  /* LOGIN */
  {
    path: '/login',
    name: 'login-view',
    component: () => import('@/views/LoginView.vue'),
    children: [
      {
        path: 'signin',
        name: 'login-signin',
        component: () => import('@/components/layouts/login/SignUp.vue')
      },
      {
        path: 'signup',
        name: 'login-signup',
        component: () => import('@/components/layouts/login/SignUp.vue')
      },
      {
        path: 'forgot-password',
        name: 'login-forgot',
        component: () => import('@/components/layouts/login/Forgot.vue')
      }
    ]
  },
  /* HOME VIEWS */
  {
    path: '/home',
    alias: '/',
    name: 'home',
    component: () => import('../views/app/HomeView.vue')
  },
  {
    path: '/employes/create-employee',
    name: 'add-employee',
    component: () => import('@/components/layouts/home/AddNewEmployee.vue')
  },

  /* TEAM VIEWS */
  {
    path: '/my-team',
    name: 'team-group',
    component: () => import(/* webpackChunkName: "team" */ '../views/app/TeamView.vue')
  },
  {
    path: '/create-new-team',
    name: 'add-team',
    component: () => import('@/components/layouts/team/actions/RegisterNewTeam.vue')
  },

  /* TRAINING VIEWS */
  {
    path: '/training/',
    name: 'trainings-register',
    component: () => import('../views/app/TrainingView.vue')
  },
  {
    path: '/training/create',
    name: 'add-training',
    component: () => import('@/components/layouts/training/actions/AddNewTraining.vue')
  }
]

const router = new VueRouter({
  mode: 'history',
  linkActiveClass: 'Active',
  routes
})

export default router
