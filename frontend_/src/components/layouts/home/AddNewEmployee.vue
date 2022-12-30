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
            <label for="validationDefault03">Nome do funcionario:</label>
            <input
              type="text"
              class="form-control input"
              id="validationDefault01"
              placeholder="Nome..."
              v-model="employeeData.name"
              required
            />
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault02">CPF/RG: </label>
            <input
              type="text"
              class="form-control input"
              id="validationDefault02"
              placeholder="999-8..."
              v-model="employeeData.cpf"
              required
            />
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">Função: </label>
            <div class="input-group">
              <input
                type="text"
                class="form-control input"
                id="validationDefaultUsername"
                placeholder="Aux..."
                aria-describedby="inputGroupPrepend2"
                v-model="employeeData.function"
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
            ref="file"
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
            <p style="margin-bottom: 2px" for="validationDefault03">Observações:</p>
            <textarea
              class="form-control input w-100"
              placeholder="Observações sobre o funcionario"
              v-model="employeeData.observation"
            ></textarea>
          </div>
        </div>
        <div class="d-flex justify-content-end ">
          <input
            type="submit"
            class="button"
            @click.prevent="$router.back()"
            value="Voltar"
          />
          <input
            type="submit"
            class="button"
            @click.prevent="createEmployee()"
            value="Cadastrar"
          />
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import { mapActions } from 'vuex'

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
    ...mapActions(['addEmployee']),
    createEmployee () {
      return this.addEmployee(this.employeeData)
    },
    gocthaNameImage () {
      return (this.employeeData.photo = this.$refs.file.files[0])
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
