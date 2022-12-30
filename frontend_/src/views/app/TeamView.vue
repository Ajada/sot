<template>
  <div>
    <TeamModal :teamData="teamData" />
    <div class="p-2 d-flex justify-content-center mb-3">
      <h3 class="font-weight-light p-2">
        <i>
          <i class="fa-solid fa-users"></i>
          Ultimas Turmas
        </i>
      </h3>
      <div class="ms-5">
        <router-link class="button shadow-sm" :to="{ name: 'add-team' }">
          <!-- <i style="font-size: 20px; margin-right: 2px" class="fa-solid fa-users"></i> -->
          Nova Turma
        </router-link>
      </div>
    </div>

    <h3 v-if="!data[0]" class="font-weight-light text-grey p-2">
      <i>
        Nenhuma turma encontrada
      </i>
    </h3>
    <div class="card-container" v-else>
      <main class="container-sm">
        <section class="cards">
          <div class="cards-content pt-1">
            <div class="row">
              <TeamCard v-for="(item, index) in data" :key="index" :teamData="item" @moreInformations="showInformations"/>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</template>

<script>
import TeamCard from '@/components/_partials/card/CardTeam.vue'
import TeamModal from '@/components/_partials/modals/ModalCardTeam.vue'

export default {
  components: {
    TeamCard,
    TeamModal
  },
  data () {
    return {
      teamData: {},
      data: [
        {
          name: 'Ponte Rolante',
          date: '12/12/2022',
          instructor: 'Instructor test',
          category: 'Formação',
          realization: '##/##/####',
          valid_until: '##/##/####',
          certified: [
            {
              name: 'Aluno 1',
              link: '#'
            },
            {
              name: 'Aluno 2',
              link: '#'
            },
            {
              name: 'Aluno 3',
              link: '#'
            }
          ]
        },
        {
          name: 'Operação de Empilhadeira',
          date: '09/11/2022',
          instructor: 'Instructor test',
          category: 'Formação',
          realization: '##/##/####',
          valid_until: '##/##/####',
          certified: [
            {
              name: 'Wanderlei',
              link: '#'
            },
            {
              name: 'Aluno 4',
              link: '#'
            },
            {
              name: 'Aluno 5',
              link: '#'
            }
          ]
        },
        {
          name: 'Operação de Retro Escavadeira',
          date: '06/10/2022',
          instructor: 'Instructor test',
          category: 'Formação',
          realization: '##/##/####',
          valid_until: '##/##/####',
          certified: [
            {
              name: 'Safira',
              link: '#'
            },
            {
              name: 'Theo',
              link: '#'
            },
            {
              name: 'Evellin',
              link: '#'
            }
          ]
        }
      ]
    }
  },
  methods: {
    showInformations (info) {
      this.teamData = info
      return this.teamData
    }
  },
  created () {
  }
}
</script>
