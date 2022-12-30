<template>
  <div>
    <div class="header">
      <div class="text-end p-3 text-white">
        <button title="Sair" class="float" @click="exit()">
          <i class="fa-solid fa-right-from-bracket mt-1 fs-4"></i>
        </button>
      </div>
    </div>
    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label title="Abrir menu" for="openSidebarMenu" class="sidebarIconToggle">
      <div class="spinner diagonal part-1"></div>
      <div class="spinner horizontal"></div>
      <div class="spinner diagonal part-2"></div>
    </label>
    <div id="sidebarMenu">
      <ul class="sidebarMenuInner">
        <router-link class="float nav-link" :to="{ name: 'home' }">
          <li>
            <i class="fa-solid fa-house"></i>
            Inicio
          </li>
        </router-link>
        <router-link class="float nav-link" :to="{ name: 'team-group' }">
          <li>
            <i class="fa-solid fa-people-group"></i>
            Turmas
          </li>
        </router-link>
        <router-link class="float nav-link" :to="{ name: 'trainings-register' }">
          <li>
            <i class="fa-solid fa-chalkboard-user"></i>
            Treinamentos
          </li>
        </router-link>
      </ul>
    </div>
  </div>
</template>

<script>
import { mapActions } from 'vuex'

export default {
  name: 'MenuNav',
  methods: {
    ...mapActions(['logout']),
    exit () {
      return this.logout()
    }
  }
}
</script>
<style scoped lang="scss">
button{
  background-color: transparent;
  border: none;
  color: white;
}
.header {
  display: table;
  margin: 0 auto;
  width: 100%;
  max-width: 100%;
  box-shadow: none;
  background: linear-gradient(-20deg, #56baed 100%, #001ba2 50%);
  position: fixed;
  height: 60px!important;
  overflow: hidden;
  z-index: 10;
}
input[type=checkbox] {
  transition: all 0.3s;
  box-sizing: border-box;
  display: none;
}
input[type=checkbox]:checked {
  ~ #sidebarMenu {
    transform: translateX(0);
  }
  ~ .sidebarIconToggle > .horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    opacity: 0;
  }
  ~ .sidebarIconToggle > .diagonal.part-1 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(135deg);
    margin-top: 8px;
  }
  ~ .sidebarIconToggle > .diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(-135deg);
    margin-top: -9px;
  }
}
.sidebarIconToggle {
  transition: all 0.3s;
  box-sizing: border-box;
  cursor: pointer;
  position: fixed;
  z-index: 99;
  top: 22px;
  left: 15px;
  height: 22px;
  width:  22px;
  .spinner {
    transition: all 0.3s;
    box-sizing: border-box;
    position: absolute;
    height: 4px;
    width: 100%;
    background-color: #fff;
  }
  .horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
  }
  .diagonal{}
  .part-1 {
    position: relative;
    transition: all 0.3s;
    box-sizing: border-box;
    float: left;
  }
  .part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
  }
}
#sidebarMenu {
  height: 100%;
  position: fixed;
  left: 0;
  width: 250px;
  margin-top: 60px;
  transform: translateX(-250px);
  transition: transform 250ms ease-in-out;
  background: linear-gradient(20deg, #000e57 0%, #5872f9 100%);
  background-image: url('./../../../assets/wolf-back.png');
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  box-shadow: 5px 5px 20px rgb(108, 108, 108);
  z-index: 11;
  .sidebarMenuInner{
    margin:0;
    padding:0;
    border-top: 1px solid rgba(255, 255, 255, 0.10);
    a{
      list-style: none;
      color: #fff;
      text-transform: uppercase;
      font-weight: bold;
      padding: 20px;
      cursor: pointer;
      width: 100%;
      border-bottom: 1px solid rgba(255, 255, 255, 0.10);
      li{
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        cursor: pointer;
        text-decoration: none;
      }
    }
  }
}
</style>
