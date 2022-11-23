<template>
  <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header pb-0">
          <div class="w-100">
            <div class="d-inline">
              <div class="d-flex w-100" style="height: 1px">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="justify-content-center w-100 d-flex">
                <h4><i> <strong> {{ teamData.name }} </strong> </i></h4>
              </div>
              <div class="mt-2">
                <i>
                  <p class="mb-1">Instrutor:  {{ teamData.instructor }}</p>
                  <p class="mb-1">Categoria:  {{ teamData.category }}</p>
                  <p class="mb-1">Realização: {{ teamData.realization }}</p>
                  <p class="mb-1">Valido até: {{ teamData.valid_until }}</p>
                </i>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div>
            <div class="w-100 mb-2">
              <i> <strong>Documentos</strong> </i>
            </div>
            <div class="shadow-sm w-100 rounded">
              <router-link to="#">
                <button class="w-100 btn border border-secondary p-1 rounded fw-bold text-dark">
                  <i>
                    LISTA DE PRESENÇA
                  </i>
                </button>
              </router-link>
            </div>
          </div>

          <div class="mt-3 w-100">
            <div class="w-100 mb-2">
              <i> <strong>Certificados</strong> </i>
            </div>
            <div class="d-flex justify-content-center wrap">
              <div v-for="(item, index) in teamData.certified" :key="index" class="w-20 rounded m-1">
                <router-link to="#">
                  <button class="btn w-100 p-1 border border-secondary rounded fw-bold text-dark">
                    <i>
                      {{ item.name }}
                    </i>
                  </button>
                </router-link>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary me-4 shadow-sm" data-bs-dismiss="modal">
            Fechar
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    teamData: Object
  }
}
</script>

<style scoped lang="scss">
.wrap{
  flex-wrap: wrap;
  flex-direction: row;
  max-height: 20vh;
  overflow: auto;
  button{
    text-align: center;
  }
}
.modal-header{
  border: 1px solid white;
}
.modal-footer{
  border: 1px solid white;
}
</style>
