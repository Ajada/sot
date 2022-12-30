  <template>
  <div id="app">
    <div v-if="checkJwt">
      <MenuNav />
      <div style="padding: 30px" class="p-4-5"></div>
    </div>
    <transition name="slide" mode="out-in">
      <router-view />
    </transition>
  </div>
</template>

<script>
import MenuNav from '@/components/_partials/nav/NavMenu.vue'
import { mapActions } from 'vuex'

export default ({
  components: {
    MenuNav
  },
  computed: {
    checkJwt () {
      return localStorage.__access && this.$route.path !== '/login' ? this.getData() : false
    }
  },
  data () {
    return {
      storage: localStorage.__access
    }
  },
  methods: {
    ...mapActions(['getEmployees', 'getTrainings']),
    getData () {
      this.getTrainings()
      return this.getEmployees()
    }
  }
})
</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css?family=Poppins');

#app {
  font-family: "Poppins";
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  .float{
    transition: 0.3s;
    :hover{
      transform: translateX(5px);
      text-shadow: -5px 5px 1px rgba(0, 0, 0, 0.594);
      transition: 0.3s;
      cursor: pointer;
    }
  }
  .input{
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
  .button {
    background-color: #56baed;
    border: none;
    color: white;
    padding: 15px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 15px;
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
  .w-10{
    width: 10%;
  }
  .w-20{
    width: 23%;
  }
  .w-87{
    width: 87%;
  }
  .text-grey{
    color: rgba(107, 107, 107, 0.352);
  }
  ::-webkit-scrollbar {
    width: 2px;
    height: 2px;
  }
  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1;
  }
    ::-webkit-resizer{
      color: red;
    }
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #888;
  }
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #555;
  }
}

.slide-enter,.slide-leave-to {
  transform: translate(50px);
  opacity: 0;
}
.slide-enter-active,
.slide-leave-active {
  transition: all 0.3s;
}
</style>
