<template>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <router-link
        :to="{ name: 'login-signin' }"
        @click.native="componentActive = 'SignInComponent'">
          <h2 :class="actived('SignInComponent')">
            Login
          </h2>
      </router-link>
      <router-link
        :to="{ name: 'login-signup' }"
        @click.native="componentActive = 'SignUpComponent'">
          <h2 :class="actived('SignUpComponent')">
            Cadastre-se
          </h2>
      </router-link>

      <transition name="slide" mode="out-in">
        <keep-alive>
          <component :is="componentActive"></component>
        </keep-alive>
      </transition>

      <div id="formFooter">
        <router-link
          :to="{ name: 'login-forgot' }"
          @click.native="componentActive = 'ForgotPassword'">
            <h6 :class="actived('ForgotPassword')">
              Esqueceu sua senha ?
            </h6>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
import SignInComponent from '@/components/layouts/login/SignIn.vue'
import SignUpComponent from '@/components/layouts/login/SignUp.vue'
import ForgotPassword from '@/components/layouts/login/Forgot.vue'

export default {
  components: {
    SignInComponent,
    SignUpComponent,
    ForgotPassword
  },
  data () {
    return {
      componentActive: 'SignInComponent'
    }
  },
  methods: {
    actived (component) { return this.componentActive === component ? 'actived' : ['inactive underlineHover'] }
  }
}
</script>

<style lang="scss">
.slide-enter,.slide-leave-to {
  transform: translate(50px);
  opacity: 0;
}
.slide-enter-active,
.slide-leave-active {
  transition: all 0.3s;
}
.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
  a {
    color: #92badd;
    display:inline-block;
    text-decoration: none;
    font-weight: 400;
    &.router-link-exact-active {
      color: rgb(35, 57, 255) !important;
      transition: 0.3s;
      font-size: 20px;
      font-weight: 700;
      padding: 3px;
      // text-shadow: -5px 5px 5px rgba(69, 69, 69, 0.344);
    }
  }
  h2 {
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    display:inline-block;
    margin: 40px 8px 10px 8px;
    color: #cccccc;
  }
  #formContent {
    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;
    padding: 30px;
    width: 90%;
    max-width: 450px;
    position: relative;
    padding: 0px;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    text-align: center;
  }
  #formFooter {
    background-color: #f6f6f6;
    border-top: 1px solid #dce8f1;
    padding: 25px;
    text-align: center;
    -webkit-border-radius: 0 0 10px 10px;
    border-radius: 0 0 10px 10px;
  }
  #user-icon {
    width:60%;
    font-size: 80px;
    color: rgba(165, 165, 165, 0.6);
  }
  .underlineHover{
    &:after {
      display: block;
      left: 0;
      bottom: -10px;
      width: 0;
      height: 2px;
      background-color: #56baed;
      content: "";
      transition: width 0.2s;
    }
    &:hover {
      color: #0d0d0d;
      &:after{
        width: 100%;
      }
    }
  }
  .inactive {
    color: #cccccc;
  }
  .actived {
    color: #0d0d0d;
    border-bottom: 2px solid #5fbae9;
  }
}
/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn{
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
  .first {
    -webkit-animation-delay: 0.4s;
    -moz-animation-delay: 0.4s;
    animation-delay: 0.4s;
  }
  .second {
    -webkit-animation-delay: 0.6s;
    -moz-animation-delay: 0.6s;
    animation-delay: 0.6s;
  }
  .third {
    -webkit-animation-delay: 0.8s;
    -moz-animation-delay: 0.8s;
    animation-delay: 0.8s;
  }
  .fourth {
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    animation-delay: 1s;
  }
}
</style>
