import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: () => import('../views/HomeView.vue')
  },
  {
    path: '/employes/create-employee',
    name: 'add-employee',
    component: () => import('@/components/layouts/home/AddNewEmployee.vue')
  },
  {
    path: '/my-team',
    name: 'team-group',
    component: () => import(/* webpackChunkName: "team" */ '../views/TeamView.vue')
  },
  {
    path: '/my-team/create-new-team',
    name: 'add-team',
    component: () => import('@/components/layouts/team/actions/RegisterNewTeam.vue')
  },
  {
    path: '/training/',
    name: 'trainings-register',
    component: () => import('@/views/TrainingView.vue')
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
