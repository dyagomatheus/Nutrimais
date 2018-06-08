import Vue from 'vue'

export default {
  state: {
    detailList: [],
    detailView: {}
  },
  mutations: {
    updateDetailList (state, data) {
      state.detailList = data
    },
    updateDetailView (state, data) {
      state.detailView = data
    }
  },
  actions: {
    getDetail (context, id) {
      Vue.http.get('api/plano_alimentar/' + id).then(response => {
        console.log(response)
        context.commit('updateDetailList', response.data)
      })
    },
    getPatient (context, id) {
      Vue.http.get('api/plano_alimentar/' + id).then(response => {
        context.commit('updateDetailView', response.data)
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
