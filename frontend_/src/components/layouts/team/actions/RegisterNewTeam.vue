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
      <form class="w-75 p-2" method="post" enctype="multipart/form-data">
        <div>
          <select class="form-select" aria-label="Default select example">
            <option selected>Selecione o Treinamento</option>
            <option value="1">NBR 14276 / Brigada Emergência - Combate Básico/ Avançado</option>
            <option value="2">NBR 14276 / Brigada Emergência - Primeiros Socorros</option>
            <option value="3">NBR 14276 / Brigada Emergência - Resgate </option>
            <option value="4">Primeiros Socorros - Avançado</option>
            <option value="5">NR-10 / Segurança em Instalação em Serviços e Eletricidade</option>
            <option value="6">NR-10 / SEP</option>
            <option value="7">NR-11 / Direção Defensiva</option>
            <option value="8">NR-11 / Operação de BobCat</option>
            <option value="9">NR-11 / Operação de Empilhadeiras</option>
            <option value="10">NR-11 / Operação de Empilhadeiras, Guindastes</option>
            <option value="11">NR-11 / Operação de Talhas e Pontes Rolantes</option>
            <option value="12">NR-11 / Operações Pá Carregadeira, Guindastes</option>
            <option value="13">NR-11 / Operações Pá Carregadeira, Guindastes</option>
            <option value="14">NR-11 / Operações Pá Carregadeira, Guindastes</option>
            <option value="15">NR-11 / Operação de Pá Carregadeira</option>
          </select>
        </div>
        <div class="col-md-4 mt-3 w-100">
          <input type="file" class="input-file" id="file_certified" ref="certified" />
          <label for="file_certified" class="btn btn-tertiary js-labelFile border border-dark">
            <i class="icon fa fa-check"></i>
            <span style="padding-left: 10px" class="js-fileName">
              Subir Lista de Presença
            </span>
          </label>
        </div>
        <div class="mt-3">
          <select class="form-select">
            <option selected>Selecione o Treinamento</option>
            <option value="1">NBR 14276 / Brigada Emergência - Combate Básico/ Avançado</option>
            <option value="2">NBR 14276 / Brigada Emergência - Primeiros Socorros</option>
            <option value="3">NBR 14276 / Brigada Emergência - Resgate </option>
          </select>
        </div>
        <div class="d-flex mt-5 justify-content-end">
          <input type="submit" class="btn btn-outline-secondary m-1 shadow-sm" @click="$router.back()" value="Voltar"/>
          <input type="submit" class="btn btn-outline-primary m-1 shadow-sm" value="Registrar Turma"/>
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
option{
  max-height: 1px;
  overflow: auto;
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
