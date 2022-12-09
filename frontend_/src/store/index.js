import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    jwtSession: undefined,
    myTeam: [
      { id: 1, name: 'Fiona Ebert', function: 'Mestre de Obras', image: 'https://www.alcoholandyouni.com/wp-content/uploads/2013/01/team1.jpg' },
      { id: 2, name: 'Albert Figman', function: 'Engenheiro', image: 'https://www.alcoholandyouni.com/wp-content/uploads/2013/01/team2.jpg' },
      { id: 3, name: 'Paul Garden', function: 'Encarregado', image: 'https://www.alcoholandyouni.com/wp-content/uploads/2013/01/team3.jpg' },
      { id: 4, name: 'Wesley Joe', function: 'Tecnico de Segurança', image: 'https://www.alcoholandyouni.com/wp-content/uploads/2013/01/team4.jpg' },
      { id: 5, name: 'Joe Mcleen', function: 'Montador de Andaime', image: 'https://www.alcoholandyouni.com/wp-content/uploads/2013/01/team5.jpg' },
      { id: 6, name: 'Crist Oracle', function: 'Montador de Andaime', image: 'https://www.alcoholandyouni.com/wp-content/uploads/2013/01/team6.jpg' },
      { id: 7, name: 'Beth Willians', function: 'Tecnico de Segurança', image: 'https://www.alcoholandyouni.com/wp-content/uploads/2013/01/team7.jpg' },
      { id: 8, name: 'Beth ', function: 'Tecnico de Segurança', image: 'https://www.alcoholandyouni.com/wp-content/uploads/2013/01/team8.jpg' },
      { id: 9, name: 'Beth ', function: 'Aux. Montador de Andaime', image: 'https://www.alcoholandyouni.com/wp-content/uploads/2013/01/team9.jpg' },
      { id: 10, name: 'Beth ', function: 'Aux. Montador de Andaime', image: 'https://www.alcoholandyouni.com/wp-content/uploads/2013/01/team10.jpg' }
    ],
    trainings: [
      { id: 1, name: 'Treinamento de escavadeira', category: 'EAD', type: 'Reciclagem', workload: '8', periodicity: '1' },
      { id: 2, name: 'Treinamento de empilhadeira', category: 'Presencial', type: 'Formação', workload: '16', periodicity: '1' }
    ]
  },
  getters: {
  },
  mutations: {
    setJwtSession (state, payload) {
      return (state.jwtSession = payload)
    }
  },
  actions: {
    auth (context, payload) {
      context.commit('setJwtSession', payload)
    }
  },
  modules: {
  }
})
