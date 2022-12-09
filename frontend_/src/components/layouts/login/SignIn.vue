<template>
  <div>
    <div class="fadeIn first">
      <i id="user-icon" class="fa-solid fa-circle-user"></i>
    </div>
    <form>
      <input v-model="param.email" type="text" class="shadow-sm fadeIn second" placeholder="usuario">
      <input v-model="param.password" type="password" class="shadow-sm fadeIn third" placeholder="senha">
      <input @click.prevent="login()" type="submit" class="shadow-sm fadeIn fourth" value="Entrar">
    </form>
  </div>
</template>

<script>
import { mapActions } from 'vuex'
import axios from '@/config/axios'

export default {
  name: 'SignInComponent',
  data () {
    return {
      param: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
    ...mapActions(['auth']),
    login () {
      axios.post('auth/login', this.param)
        .then(
          res => {
            console.log(res)
          },
          err => {
            console.log(err)
          }
        )
      // return this.param.user === 'teste' && this.param.pass === '123' ? this.login('Token jwt ativo') : this.login(null)
    }
  }
}
</script>

<style scoped lang="scss">
input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  &:hover{
    background-color: #39ace7;
  }
  &:active{
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
  }
}
input[type=text], input[type=password], input[type=email] {
  background-color: #f6f6f6;
  border: none !important;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  &:focus{
    background-color: #fff;
    border-bottom: 2px solid #5fbae9;
  }
  &::placeholder{
    color: rgba(0, 0, 0, 0.357);
  }
}
</style>
