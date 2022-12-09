<template>
  <div class="container-sm">
    <h3 class="font-weight-light p-2">
      <i>
        <i class="fa-solid fa-user-tie"></i>
        Novo Funcionario
      </i>
    </h3>

    <div class="d-flex justify-content-center">
      <form
        class="p-2"
        enctype="multipart/form-data"
      >
        <div class="row">
          <div class="col mb-3">
            <label for="validationDefault01">Nome do Funcioanrio: </label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2">
                  <i class="fa-solid fa-user-tie p-1"></i>
                </span>
              </div>
              <input
                type="text"
                class="form-control"
                id="validationDefault01"
                placeholder="Multigas"
                required
              />
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault02">CPF: </label>
            <input
              type="text"
              class="form-control"
              id="validationDefault02"
              placeholder="KA000-00000"
              required
            />
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">Função: </label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"
                  ><i class="fas fa-user p-1"></i
                ></span>
              </div>
              <input
                type="text"
                class="form-control"
                id="validationDefaultUsername"
                placeholder="X Solution"
                aria-describedby="inputGroupPrepend2"
                required
              />
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 w-100">
          <input
            type="file"
            class="input-file"
            id="photo"
            ref="employee_photo"
            @change="gocthaNameImage()"
          />
          <label
            for="photo"
            class="btn btn-tertiary js-labelFile border border-dark"
          >
            <i class="icon fa fa-check"></i>
            <span style="padding-left: 10px" class="js-fileName">
              Foto do Funcionario
            </span>
          </label>
        </div>

        <div class="form-row">
          <div class="col mb-3">
            <label for="validationDefault03">Observações:</label>
            <textarea
              class="form-control"
              placeholder="Observações sobre o funcionario"
            ></textarea>
          </div>
        </div>
        <div class="d-flex justify-content-end">
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
  data () {
    return {
      employeeData: {
        name: '',
        cpf: '',
        function: '',
        photo: undefined,
        observation: ''
      }
    }
  },
  methods: {
    gocthaNameImage () {
      this.employeeData.photo = this.$refs.employee_photo.files[0]
      return console.log(this.employeeData.photo)
    }
  }
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
