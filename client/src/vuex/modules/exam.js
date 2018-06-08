import Vue from 'vue'

export default {
  state: {
    examList: [],
    examView: {}
  },
  mutations: {
    updateExamList (state, data) {
      state.examList = data
    },
    updateExamView (state, data) {
      state.examView = data
    }
  },
  actions: {
    getExams (context, id) {
      Vue.http.get('api/exams?where[pacient_id]=' + id).then(response => {
        console.log(response)
        context.commit('updateExamList', response.data)
      })
    },
    getPatient (context, id) {
      Vue.http.get('api/pacients/' + id).then(response => {
        context.commit('updatePatientView', response.data)
      })
    },
    newExam (context, data) {
      Vue.http.post('api/exams', data)
    },
    updateExams (context, params) {
      Vue.http.put('api/pacients/' + params.id, params.data)
    },
    removeExam (context, id) {
      console.log(id)
      Vue.http.delete('api/exams/' + id)
    }
  }
}
