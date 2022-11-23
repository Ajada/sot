<template>
  <div class="container-sm">
    <h3 class="font-weight-light p-2">
      <i>
        <i class="fa-solid fa-chalkboard-user"></i>
        Registrar Treinamento
      </i>
    </h3>

    <div class="d-flex justify-content-center">
      <form class="p-2 w-75" enctype="multipart/form-data">
        <div class="row mb-3">
          <div class="col mb-6">
            <label for="validationDefault01"><i>Nome do Treinamento:</i> </label>
            <input type="text" class="form-control" style="text-align: center;" placeholder="Ponte rolante" required />
          </div>
        </div>

        <div class="row">
          <div class="col mb-3">
            <label for="validationDefault01"><i>Tipo do Treinamento: </i></label>
            <input type="text" class="form-control" placeholder="Formação" required />
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationDefault02"><i>Categoria: </i></label>
            <input type="text" class="form-control justify-content-center" placeholder="Presencial" required />
          </div>
        </div>

        <div class="row">
          <div class="col mb-3">
            <label for="validationDefault01"><i>Carga Horária: </i></label>
            <input type="text" class="form-control" placeholder="4 horas" required />
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationDefault02"><i>Periodicidade: </i></label>
            <input type="text" class="form-control" placeholder="1 ano" required />
          </div>
        </div>
        <div class="mt-5 d-flex justify-content-end">
          <input
            type="submit"
            class="btn btn-outline-secondary m-1 shadow-sm"
            @click="$router.back()"
            value="Voltar"
          />
          <input
            type="submit"
            class="btn btn-outline-primary m-1 shadow-sm"
            value="Cadastrar"
          />
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style lang="scss">
.btn-tertiary {
  color: #555;
  padding: 0;
  line-height: 40px;
  width: 100%;
  margin: auto;
  display: block;
  border: 2px solid #555;
  &:hover,
  &:focus {
    color: lighten(#555, 20%);
    border-color: lighten(#555, 20%);
  }
}

/* input file style */

.input-file {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
  + .js-labelFile {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    padding: 0 10px;
    cursor: pointer;
    .icon:before {
      //font-awesome
      content: "\f093";
    }
    &.has-file {
      .icon:before {
        //font-awesome
        content: "\f00c";
        color: #5aac7b;
      }
    }
  }
}
</style>
