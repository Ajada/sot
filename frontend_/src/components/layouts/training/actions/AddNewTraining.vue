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
            <input type="text" v-model="training.training_name" class="form-control input w-100" style="text-align: center;" placeholder="Ponte rolante" required />
          </div>
        </div>

        <div class="row">
          <div class="col mb-3">
            <label for="validationDefault01"><i>Tipo do Treinamento: </i></label>
            <input type="text" v-model="training.type" class="form-control input" placeholder="Formação" required />
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationDefault02"><i>Categoria: </i></label>
            <input type="text" v-model="training.category" class="form-control input justify-content-center" placeholder="Presencial" required />
          </div>
        </div>

        <div class="row">
          <div class="col mb-3">
            <label for="validationDefault01"><i>Carga Horária: </i></label>
            <input type="text" v-model="training.workload" class="form-control input" placeholder="4 horas" required />
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationDefault02"><i>Validade por ano: </i></label>
            <input type="number" v-model="training.periodicity" class="form-control input" placeholder="2" required />
          </div>
        </div>
        <div class="mt-5 d-flex justify-content-end">
          <input
            type="submit"
            class="button m-1 shadow-sm"
            @click.prevent="$router.back()"
            value="Voltar"
          />
          <input
            type="submit"
            @click.prevent="newTraining"
            class="button m-1 shadow-sm"
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
      training: {
        training_name: '',
        type: '',
        category: '',
        workload: '',
        periodicity: ''
      }
    }
  },
  methods: {
    ...mapActions(['addTraining', 'getTrainings']),
    newTraining () {
      return this.addTraining(this.training)
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
