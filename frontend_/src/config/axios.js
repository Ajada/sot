import axios from 'axios'

const instance = axios

instance.defaults.baseURL = process.env.VUE_APP_URL_CLIENT

export default instance
