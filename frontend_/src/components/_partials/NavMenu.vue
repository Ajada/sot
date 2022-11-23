<template>
  <nav class="navbar p-3 navbar-expand-lg bg-light text-dark shadow-sm">
    <div class="container-fluid">
      <button class="border-0 fs-2 text-dark navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span>
          <i class="fa-solid fa-bars"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse p-0" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <router-link class="nav-link" :to="{ name: 'home' }">
              <i class="fa-solid fa-house"></i>
              Inicio
            </router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="{ name: 'team-group' }">
              <i class="fa-solid fa-people-group"></i>
              Turmas
            </router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="{ name: 'trainings-register' }">
              <i class="fa-solid fa-chalkboard-user"></i>
              Treinamentos
            </router-link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'MenuNav'
}
</script>

<style scoped lang="scss">
.bg-marine{
  background-color: rgb(8, 8, 59);
}
nav {
  color: black;

  a {
    font-weight: normal;
    color: rgb(0, 0, 0) !important;
    text-decoration: none;
    &.router-link-exact-active {
      color: rgb(35, 57, 255) !important;
      transition: 0.3s;
      font-size: 20px;
      font-weight: 700;
      padding: 3px;
      text-shadow: -5px 5px 5px rgba(69, 69, 69, 0.344);
    }
  }
}
</style>
