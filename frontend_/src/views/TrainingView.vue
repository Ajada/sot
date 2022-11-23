<template>
  <div>
    <TrainingModal :training="trainingInformations"/>
    <div class="d-flex justify-content-center mb-3 p-2">
      <h3 class="font-weight-light p-1">
        <i>
          <i class="fa-solid fa-clipboard-list"></i>
          Treinamentos Registrados
        </i>
      </h3>
      <div class="ms-5">
        <router-link class="btn btn-outline-primary mt-1 shadow-sm" :to="{ name: 'add-training' }">
          <i style="font-size: 15px" class="fas fa-plus"></i>
          Adicionar
        </router-link>
      </div>
    </div>
    <div class="container">
      <h3 v-if="!trainings" class="font-weight-light text-grey p-2">
        <i>
          Não existem treinamentos registrados
        </i>
      </h3>
      <table v-else class="table table-striped m-0">
        <thead class="table-light">
          <tr class="border border-black">
            <td class="w-10" scope="col">Treinamento</td>
            <td class="w-10" scope="col">Categoria</td>
            <td class="w-10" scope="col">C.Horária</td>
            <td style="width: 8%" scope="col">Detalhes</td>
          </tr>
        </thead>
      </table>
      <TrainingList v-for="(item, index) in trainings" :key="index" :training="item" @modalOn="getDataTraining"/>
    </div>
  </div>
</template>

<script>
import TrainingList from '@/components/layouts/training/ListTraining.vue'
import TrainingModal from '@/components/_partials/ModalCardTraining.vue'

export default {
  components: {
    TrainingList,
    TrainingModal
  },
  data () {
    return {
      trainingInformations: {},
      trainings: [
        {
          id: 1,
          name: 'Treinamento de escavadeira',
          category: 'EAD',
          type: 'Reciclagem',
          workload: '8',
          periodicity: '1'
        },
        {
          id: 2,
          name: 'Treinamento de empilhadeira',
          category: 'Presencial',
          type: 'Formação',
          workload: '16',
          periodicity: '1'
        }
      ]
    }
  },
  methods: {
    getDataTraining (training) {
      this.trainingInformations = training
      return this.trainingInformations
    }
  }
}
</script>

<style>

</style>
