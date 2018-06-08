import Vue from 'vue'

export default {
  state: {
    patientList: [],
    patientView: {}
  },
  mutations: {
    updatePatientList (state, data) {
      state.patientList = data
    },
    updatePatientView (state, data) {
      state.patientView = data
    }
  },

  getters: {
    getPatient: (state, getters) => (id) => {
      console.log(this.id)
      for (var i = 0; i <= state.patientList; i++) {
        if (state.patientList[0].id === id) {
          return state.patientList[0]
        }
      }
    }
  },

  actions: {
    getPatients (context) {
      Vue.http.get('api/pacients').then(response => {
        context.commit('updatePatientList', response.data)
      })
    },
    getPatient (context, id) {
      Vue.http.get('api/pacients/' + id).then(response => {
        context.commit('updatePatientView', response.data)
      })
    },
    newPatient (context, data) {
      Vue.http.post('api/pacients', data)
    },
    updatePatient (context, params) {
      Vue.http.put('api/pacients/' + params.id, params.data)
    },
    removePatient (context, id) {
      Vue.http.delete('api/pacients/' + id)
    }
  }
}
