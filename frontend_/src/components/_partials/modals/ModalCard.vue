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
                <div class="image" :style="'background-image: url('+url+user.photo+')'"></div>
              </div>
              <div>
                <h5> {{ user.name }} </h5>
                <h6 class="text-secondary"> <i>{{ user.function }}</i> </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-body pad">
          <table class="table table-striped">
            <thead class="table-light">
              <tr class="border border-black">
                <td class="w-25" scope="col">Treinamentos</td>
                <td class="w-25" scope="col">Realização</td>
                <td class="w-25" scope="col">Expiração</td>
                <td class="w-10" scope="col">Status</td>
              </tr>
            </thead>
            <tbody> <!-- for -->
              <tr>
                <td class="w-25" scope="col">Treinamento de ponte Rolante</td>
                <td class="w-25 col" scope="col">##/##/####</td>
                <td class="w-25" scope="col">##/##/####</td>
                <td style="font-weight: 700; width: 1%" class="text-success fw-bold"><i class="fa-solid fa-circle"></i></td>
              </tr>
              <tr>
                <td class="w-25" scope="col">Trabalho em altura</td>
                <td class="w-25 col" scope="col">##/##/####</td>
                <td class="w-25" scope="col">##/##/####</td>
                <td style="font-weight: 700; width: 1%" class="text-warning fw-bold"><i class="fa-solid fa-circle"></i></td>
              </tr>
              <tr>
                <td class="w-25" scope="col">Op. Empilhadeira</td>
                <td class="w-25 col" scope="col">##/##/####</td>
                <td class="w-25" scope="col">##/##/####</td>
                <td style="font-weight: 700; width: 1%" class="text-danger fw-bold"><i class="fa-solid fa-circle"></i></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary me-4 shadow-sm" data-bs-dismiss="modal">
            Fechar
          </button>
          <button type="button" class="btn btn-outline-danger shadow-sm" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark"></i>
            Desativar
          </button>
          <button type="button" class="btn btn-outline-primary shadow-sm" data-bs-dismiss="modal">
            <i class="fa-solid fa-plus"></i>
            Treinamentos
          </button>
          <!-- <button type="button" class="btn btn-outline-warning shadow-sm" data-bs-dismiss="modal">
            <i class="fa-solid fa-user-pen"></i>
            Editar
          </button> -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    user: Object
  },
  data () {
    return {
      url: process.env.VUE_APP_URL + '/storage/user_' + localStorage.getItem('__user') + '/images/'
    }
  }
}
</script>

<style scoped lang="scss">
.image{
  width: 130px;
  height: 130px;
  border-radius: 50%;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
.modal-header{
  border: 1px solid white;
}
.modal-body{}
.pad{
  padding: 2%;
  @media screen and (max-width: 768px) {
    padding: 0px;
  }
}
.modal-footer{
  border: 1px solid white;
}
</style>
