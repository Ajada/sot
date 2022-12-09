<template>
  <div v-show="teamData" class="col-lg-4 col-md-6 mb-4">
    <div class="card shadow-sm border-0">
      <button @click.prevent="sendData" title="Detalhes do treinamento" class="btn rounded shadow-sm w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="card-body cursos-pointer p-0" style="cursor: pointer">
          <div class="user-content text-secondary">
            <h5 class="text-capitalize w-100 user-name border-bottom p-1">{{ teamData.name }}</h5>
            <h5 class="text-capitalize w-100 user-name border-bottom p-1">{{ teamData.date }}</h5>
          </div>
        </div>
      </button>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    teamData: Object
  },
  methods: {
    sendData () {
      this.$emit('moreInformations', this.teamData)
    }
  }
}
</script>
