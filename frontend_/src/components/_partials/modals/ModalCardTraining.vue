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
              </div>
                <h5> {{ training.training_name }} </h5>
            </div>
          </div>
        </div>
        <div class="modal-body p-1">
          <form class="p-2" enctype="multipart/form-data">
            <div class="row">
              <div class="col mb-3">
                <label for="validationDefault01"><i>Nome do Treinamento:</i> </label>
                <input type="text" class="form-control input" id="validationDefault01" :value="training.training_name" placeholder="Ponte Rolante" required />
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault02"><i>Categoria:</i> </label>
                <input type="text" class="form-control input justify-content-center" id="validationDefault02" :value="training.category" placeholder="Presencial" required />
              </div>
            </div>

            <div class="row mb-3">
              <div class="col mb-6">
                <label for="validationDefault01"><i>Tipo do Treinamento:</i> </label>
                <input type="text" class="form-control input" id="validationDefault01" :value="training.type" placeholder="Multigas" required />
              </div>
            </div>

            <div class="row">
              <div class="col mb-3">
                <label for="validationDefault01"><i>Carga Horária:</i> </label>
                <input type="text" class="form-control input" id="validationDefault01" :value="training.workload + ' horas'" placeholder="4 horas" required />
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault02"><i>Periodicidade:</i> </label>
                <input type="text" class="form-control input" id="validationDefault02" :value="training.periodicity + ' ano(s)'" placeholder="1 ano" required />
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary me-5 shadow-sm" data-bs-dismiss="modal">
            Fechar
          </button>
          <button type="button" class="btn btn-danger shadow-sm" data-bs-dismiss="modal">
            Remover
          </button>
          <button type="button" class="btn btn-primary shadow-sm" data-bs-dismiss="modal">
            Salvar
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    training: Object
  }
}
</script>
