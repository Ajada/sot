import Vue from 'vue'
import Vuex from 'vuex'
import axios from '@/axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    user_id: '',
    myTeam: [],
    trainings: []
  },
  getters: { },
  mutations: {
    setMyTeam (state, payload) {
      return (state.myTeam = payload)
    },
    setMyTrainings (state, payload) {
      return (state.trainings = payload)
    }
  },
  actions: {
    auth (context, payload) {
      axios.post('auth/login', payload)
        .then(
          res => {
            if (res.data.error) {
              return alert('Usuario não encontrado !') // message error
            }
            localStorage.__access = res.data._token
            localStorage.__user = res.data.user_id
            return (window.location.href = '/')
          },
          err => {
            console.log(err)
          }
        )
    },
    logout () {
      axios.get('auth/logout')
      axios.request({
        method: 'get',
        url: 'auth/logout',
        headers: {
          user_id: localStorage.__user
        }
      })
        .then(
          res => {
            return res.data.success ? (window.location.href = '/login') : ''
          },
          err => {
            return console.log(err)
          }
        )
    },
    getEmployees (context, payload) {
      axios.request({
        method: 'GET',
        url: 'app/employees/get-team',
        headers: {
          user_id: localStorage.__user
        }
      })
        .then(
          res => {
            if (res.data.error) { return console.log(res.data.error) } // message error
            return context.commit('setMyTeam', res.data)
          },
          err => {
            console.log(err)
          }
        )
    },
    getTrainings (context, payload) {
      axios.request({
        method: 'GET',
        url: 'app/training/get-all',
        headers: {
          user_id: localStorage.__user
        }
      })
        .then(
          res => {
            if (res.data.error) { return console.log(res.data.error) } // message error
            return context.commit('setMyTrainings', res.data)
          },
          err => {
            return console.log(err)
          }
        )
    },
    addEmployee (context, payload) {
      axios.request({
        method: 'post',
        url: 'app/employees/register-employee',
        data: payload,
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      })
        .then(
          res => {
            if (res.data.error) return alert('Algo deu errado ao adicionar funcionário')
            return alert('Funcionário adicionado com sucesso !')
          },
          err => {
            return console.log(err)
          }
        )
    },
    addTraining (context, payload) {
      axios.request({
        method: 'POST',
        url: 'app/training/register',
        data: payload,
        headers: {
          'Content-Type': 'application/json'
        }
      })
        .then(
          res => {
            if (res.data.error) return alert('Algo deu errado ao adicionar treinamento')
            return alert('Treinamento adicionado com sucesso !')
          },
          err => {
            return console.log(err)
          }
        )
    }
  },
  modules: {
  }
})
