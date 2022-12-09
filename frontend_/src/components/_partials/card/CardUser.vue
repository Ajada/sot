<template>
  <div class="col-lg-4 col-md-6 mb-4 pt-5">
    <div class="card shadow-sm border-0">
      <button @click.prevent="sendEventCallModel" title="Detalhes do funcionario" class="btn rounded shadow-sm w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="card-body cursos-pointer" style="cursor: pointer">
          <div class="user-picture">
            <div class="image" :style="'background-image: url('+user.image+')'"></div>
          </div>
          <div class="user-content">
            <h5 class="text-capitalize user-name">{{ user.name }}</h5>
            <p class=" text-capitalize mt-2 text-muted small blockquote-footer">{{ user.function }}</p>
          </div>
        </div>
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CardUser',
  props: {
    user: Object
  },
  methods: {
    sendEventCallModel () {
      this.$emit('modalOn', this.user)
    }
  }
}
</script>

<style scoped lang="scss">
.cards{
  margin: 2px;
  button{ }
  .card {
    border-radius: 20px;
    min-height: 100%;
    .user-picture .image {
      position: absolute;
      top: -30%;
      right: 0%;
      width: 130px;
      height: 130px;
      border-radius: 50%;
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      padding: 10px;
    }
    .user-content .user-name {
      margin-right: 150px;
    }
  }
  .heading-border {
    position: absolute;
    width: 100%;
    top: 60%;
  }
}
</style>
