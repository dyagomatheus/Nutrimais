import Vue from 'vue'

export default {
  state: {
    mealList: [],
    mealView: {}
  },
  mutations: {
    updateMealList (state, data) {
      state.mealList = data
    },
    updateMealView (state, data) {
      state.mealView = data
    }
  },
  actions: {
    getMeal (context, id) {
      Vue.http.get('api/detalhes/refeicao/' + id).then(response => {
        console.log(response.data)
        console.log(response)
        context.commit('updateMealList', response.data)
      })
    },
    getPatient (context, id) {
      Vue.http.get('api/pacients/' + id).then(response => {
        context.commit('updatePatientView', response.data)
      })
    },
    newExams (context, data) {
      Vue.http.post('api/pacients', data)
    },
    updateExams (context, params) {
      Vue.http.put('api/pacients/' + params.id, params.data)
    },
    removePlan (context, id) {
      console.log(id)
      Vue.http.delete('api/plano_alimentar/' + id)
    }
  }
}
