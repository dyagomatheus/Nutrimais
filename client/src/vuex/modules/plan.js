import Vue from 'vue'

export default {
  state: {
    planList: [],
    planView: {}
  },
  mutations: {
    updatePlanList (state, data) {
      state.planList = data
    },
    updatePlanView (state, data) {
      state.planView = data
    }
  },
  actions: {
    getPlan (context, id) {
      Vue.http.get('api/plano_alimentar?where[pacient_id]=' + id).then(response => {
        console.log(response)
        context.commit('updatePlanList', response.data)
      })
    },
    getPlans (context, id) {
      Vue.http.get('api/plano_alimentar/' + id).then(response => {
        context.commit('updatePlanView', response.data)
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
