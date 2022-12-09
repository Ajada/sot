<template>
  <div class="home">
    <ModalCard :user="modalInformations"/>
    <div class="p-2 d-flex justify-content-center mb-3">
      <h3 class="font-weight-light p-2">
        <i>
          <i class="fa-solid fa-users"></i>
          Funcionarios
        </i>
      </h3>
      <div class="ms-5">
        <router-link class="btn btn-outline-primary mt-1 shadow-sm" :to="{ name: 'add-employee' }">
          <i style="font-size: 20px; margin-right: 2px" class="fa-solid fa-user-plus"></i>
          Registrar
        </router-link>
      </div>
    </div>

    <div class="container-sm">
      <form class="row g-3 justify-content-center">
        <div class="col-7">
          <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control text-center"
              id="floatingInput"
              title="Buscar funcionario"
              placeholder="Buscar funcionario"
            />
            <label class="text-secondary w-100" for="floatingInput">Filtrar funcionarios:</label>
          </div>
        </div>
        <div class="col-auto">
          <button type="submit" title="Buscar funcionario" class="btn btn-outline-primary mb-3 shadow-sm">
            Buscar
          </button>
        </div>
      </form>
    </div>

    <div class="card-container">
      <main class="container-sm">
        <section class="cards">
          <div class="cards-content py-2">
            <div class="row">
              <CardUser v-for="(user, index) in $store.state.myTeam" :key="index" :user="user" @modalOn="showModal"/>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</template>

<script>
import CardUser from '@/components/_partials/card/CardUser.vue'
import ModalCard from '@/components/_partials/modals/ModalCard.vue'

export default {
  name: 'HomeView',
  components: {
    CardUser,
    ModalCard
  },
  data () {
    return {
      modalInformations: {}
    }
  },
  methods: {
    showModal (UserSelected) {
      this.modalInformations = UserSelected
      return this.modalInformations
    }
  }
}
</script>

<style lang="scss">
.card-container{
  max-height: 65vh;
  overflow: auto;
}
</style>
