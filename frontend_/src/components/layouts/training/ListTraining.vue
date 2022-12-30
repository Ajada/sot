<template>
  <div>
    <table class="table table-hover m-0">
      <tbody>
        <tr>
          <td class="w-10 m-0" scope="col"> <i>{{ training.training_name }}</i> </td>
          <td class="w-10 m-0" scope="col"> <i>{{ training.category }}</i> </td>
          <td class="w-10 m-0" scope="col"> <i>{{ training.workload }}</i> horas </td>
          <td style="font-weight: 700; width: 8%;" class="text-white p-0 fw-bold">
            <button @click.prevent="openDetails(training)" class="btn w-100 mt-auto mb-auto" title="Detalhes do treinamento" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="w-100 d-flex justify-content-center">
                <div style="width: 35px" class="rounded-circle text-white">
                  <i class="fa-solid fa-caret-down p-2 bg-primary rounded-circle" style="width: 32px"></i>
                </div>
              </div>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: {
    training: Object
  },
  methods: {
    openDetails () {
      this.$emit('modalOn', this.training)
    }
  }
}
</script>

<style lang="scss">
td{
  max-width: 20px;
}
</style>
