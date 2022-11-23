<template>
  <div id="app">
    <MenuNav />
    <transition name="slide" mode="out-in">
      <router-view />
    </transition>
  </div>
</template>

<script>
import MenuNav from '@/components/_partials/NavMenu.vue'

export default ({
  components: {
    MenuNav
  }
})
</script>

<style lang="scss">
#app {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  .w-10{
    width: 10%;
  }
  .w-20{
    width: 23%;
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
