import axios from 'axios'

const instance = axios

instance.defaults.baseURL = process.env.VUE_APP_URL_CLIENT

instance.interceptors.request.use(
  (params) => {
    const jwt = localStorage.getItem('__access')
    if (jwt) {
      params.headers.Authorization = `Bearer ${jwt}`
      params.headers.User_Id = localStorage.getItem('__user')
    }
    return params
  },
  (err) => {
    return Promise.reject(err)
  }
)

instance.interceptors.response.use(
  (response) => {
    return response
  },
  (err) => {
    return console.log(err)
    // if (err.response.status) {
    // localStorage.removeItem('__access')
    // window.location.href = '/login'
    // }
  }
)

export default instance
