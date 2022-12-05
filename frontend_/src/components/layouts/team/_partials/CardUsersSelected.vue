<template>
  <div class="col-lg-3 col-md-6 mb-4 pt-5">
    <div class="card shadow-sm border-0">
      <div class="card-body cursos-pointer" style="cursor: pointer">
        <div class="user-picture">
          <div class="image" :style="'background-image: url('+employee.image+')'"></div>
        </div>
        <div class="user-content text-start">
          <h5 class="text-capitalize user-name">{{ employee.name }} </h5>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    employee: Object
  }
}
</script>

<style>
.user-picture .image {
  position: absolute;
  top: -60%;
  right: -10%;
  width:  90px;
  height: 90px;
  border-radius: 50%;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  padding: 10px;
}
</style>
