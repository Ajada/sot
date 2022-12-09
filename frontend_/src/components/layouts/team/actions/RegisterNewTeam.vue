<template>
  <div class="container">
    <div>
      <h3 class="font-weight-light p-2">
        <i>
          <i class="fa-solid fa-users"></i>
          Nova Turma
        </i>
      </h3>
    </div>
    <div class="d-flex justify-content-center">
      <form class="w-75 p-2" enctype="multipart/form-data">
        <div>
          <select class="form-select" aria-label="Default select example">
            <option selected>Selecione o Treinamento</option>
            <option v-for="(item, index) in $store.state.trainings" :key="index" :value="item.id">{{ item.name }}</option>
          </select>
        </div>
        <div class="col-md-4 mt-3 w-100">
          <input type="file" class="input-file" id="file_certified" ref="certified" multiple @change="setCertifiedList()"/>
          <label for="file_certified" class="btn btn-tertiary js-labelFile border border-dark">
            <i class="icon fa fa-check"></i>
            <span style="padding-left: 10px" class="js-fileName">
              Subir Lista de Presença
            </span>
          </label>
        </div>
        <div class="dropdown mt-3">
          <button class="btn btn-outline-secondary w-100 text-start dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Selecione os Participantes
          </button>
          <div>
            <ul class="dropdown-menu w-100">
              <li>
                <AllEmployees v-for="(item, index) in employee" :key="index" :employee="item" @employeeData="selectEmployee"/>
              </li>
            </ul>
          </div>
        </div>
        <div class="card-container w-100 mh-4">
          <main class="container-sm">
            <section class="cards">
              <div class="cards-content py-1">
                <div class="row w-100">
                  <CardEmployee v-for="(value, key) in teamParam.participants" :key="key" :employee="value" />
                </div>
              </div>
            </section>
          </main>
        </div>
      </form>
    </div>
    <div v-if="teamParam.attendance_list !== undefined">
      <p v-for="(item, index) in teamParam.attendance_list" :key="index"> {{item.name}} </p>
    </div>
    <div class="w-87 d-flex mt-5 justify-content-end">
      <input type="submit" class="btn btn-outline-secondary m-1 shadow-sm" @click="$router.back()" value="Voltar"/>
      <input type="submit" class="btn btn-outline-primary m-1 shadow-sm" @click.prevent="create()" value="Registrar Turma"/>
    </div>
  </div>
</template>

<script>
import AllEmployees from '../_partials/AllEmployees.vue'
import CardEmployee from './../_partials/CardUsersSelected.vue'
import axios from '@/config/axios.js'

export default {
  components: {
    AllEmployees,
    CardEmployee
  },
  data () {
    return {
      teamParam: {
        training_name: 'parametro teste (front)',
        instructor: 'parametro teste (front)',
        category: 'parametro teste (front)',
        realization: 'parametro teste (front)',
        valid_until: 'parametro teste (front)',
        participants: [],
        attendance_list: undefined,
        certificates: undefined
      },
      employee: this.$store.state.myTeam
    }
  },
  methods: {
    selectEmployee (employee) {
      this.teamParam.participants.push(employee)
    },
    setCertifiedList () {
      return (this.teamParam.attendance_list = this.$refs.certified.files)
    },
    create () {
      // return console.log(this.teamParam.attendance_list[0].name)
      // problemas em enviar vários arquivos
      axios.request({
        method: 'post',
        url: '/team/register-team',
        data: this.teamParam
      }).then(
        res => {
          return console.log(res)
        }
      )
    }
  }
}
</script>

<style lang="scss">
.mh-4{
  max-height: 45vh;
  overflow: auto;
}

select{
  cursor: pointer;
  option{
    max-height: 1px;
    overflow: auto;
  }
}

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
