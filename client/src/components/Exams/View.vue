<template>
  <div>

    <div id="formExam" v-show="showForm">
      <form class="row" autocomplete="off" @submit.prevent="save">
                <div class="input-field col s12">
                    <h5>Dados do Paciente</h5>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="description" class="validate" placeholder="Descrição do exame" required>
                    <label for="description" class="active">Descrição</label>
                </div>
                <div class="input-field col s6">
                    <input  type="date" id="exam_date" class="validate" placeholder="Datae de realização do exame" required>
                    <label for="exame_date" class="active">Data</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="result" class="validate" placeholder="Resultado do exame" required>
                    <label for="result" class="active">Resultado</label>
                </div>
                <div>
                </div>    
                    <div class="input-field col s6">
                    <input type="submit"class="waves-effect waves-light btn-large blue-grey darken-4" value="salvar">
                </div>
            </form>

    </div>
      <a href="" class="#1565c0 blue darken-3 btn paciente" @click.prevent="formExam"><i class="material-icons left">{{ icon }}</i>Adicionar</a>
      <a href="" class="#ffa726 orange lighten-1 btn paciente" @click.prevent="edit(patient.id)"><i class="material-icons left">edit</i>Editar</a>
  <nav class="nav-extended paciente">
      <div class="nav-wrapper #81c784 green lighten-1">
        <ul>
        <li class="brand-logo white-text text-darken-2 name">{{ patient.name }}</li>
        </ul>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
          <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
      </div>
      <div class="nav-content #81c784 green lighten-2">
        <ul class="tabs tabs-transparent">
          <li class="tab"><a href="#antropometria">Antropometria</a></li>
          <li class="tab"><a href="#anamnese">Anamnese</a></li>
          <li class="tab"><a href="#plano-alimentar">Plano Alimentar</a></li>
          <li class="tab"><a href="#gastos-energeticos">Gastos Energéticos</a></li>
          <li class="tab"><a href="#exames">Avaliações Laboratoriais</a></li>
          <li class="tab"><a href="#prescricao">Prescrição</a></li>
        </ul>
      </div>
    </nav>
       <table class="striped" align="center">
        <thead>
          <tr>
              <th>Descrição</th>
              <th>Data / Hora</th>
              <th>Resultado</th>
              <th>Ação</th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="e in exam">
            <td>{{ e.description }}</td>
            <td>{{ e.date_exam }}</td>
            <td>{{ e.result }}</td>
            <td><a class="#dd2c00 deep-orange accent-4 btn" @click.prevent="remove(e.id)">
            <i class="material-icons">delete</i></a></td>
          </tr>
        </tbody>
      </table>
            
  </div>
</template>

<script>
export default {
  name: 'Exams-view',
  data () {
    return {
      showForm: false,
      icon: 'add_circle'
    }
  },
  methods: {
    save () {
      this.$store.dispatch('newExam', this.exam).then(() => {
        this.$router.push('/pacientes')
      })
    },
    formExam () {
      this.showForm = !this.showForm
      if (this.icon === 'expand_less') {
        this.icon = 'add_circle'
      } else {
        this.icon = 'expand_less'
      }
    },
    remove: function (id) {
      console.log(id)
      this.$store.dispatch('removeExam', id)
      .then(() => {
        this.$router.push('/pacientes')
      })
      this.$router.push('/pacientes')
    },
    edit: function (id) {
      this.$store.dispatch('updatePatient', this.$route.params.id)
      this.$router.push('/pacientes/' + id + '/editar')
    }
  },
  computed: {
    exam () {
      return this.$store.state.exam.examList.data
    },
    patient () {
      return this.$store.state.patient.patientView
    }
  },
  created () {
    let id = this.$route.params.id
    this.$store.dispatch('getExams', id)
    this.$store.dispatch('getPatient', id)
  }
}
</script>

<style>
.name{
  margin-left: 10px;
}
.paciente{
  margin-top: 15px;
}

</style>
