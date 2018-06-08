<template>
  <div>

    <div id="formExam" v-show="showForm">
      <input type="text" name="description">

    </div>
      <a href="" class="#1565c0 blue darken-3 btn paciente" @click.prevent="formExam"><i class="material-icons left">{{ icon }}</i>Adicionar</a>
      <a href="" class="#ffa726 orange lighten-1 btn paciente" @click.prevent="edit(patient.id)"><i class="material-icons left">edit</i>Editar</a>
  <nav class="nav-extended paciente">
      <div class="nav-wrapper #81c784 green lighten-1">
        <ul>
        <li class="brand-logo white-text text-darken-2 name">{{ detail.description }}</li>
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
          <li class="tab"><a href="#plano-alimentar" @click.prevent="goToPlano(patient.id)">Plano Alimentar</a></li>
          <li class="tab"><a href="#gastos-energeticos">Gastos Energéticos</a></li>
          <li class="tab"><a href="#exames">Avaliações Laboratoriais</a></li>
          <li class="tab"><a href="#prescricao">Prescrição</a></li>
        </ul>
      </div>
    </nav>
       <table class="striped" align="center">
        <thead>
          <tr>
              <th>Refeições</th>
              <th>Horário</th>
              <th width="30px">Ação</th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="d in detail.meal">
            <td>{{ d.description }}</td>
            <td>{{ d.SCHEDULE }}</td>
            <td width="30px"><a class="#dd2c00 deep-orange accent-4 btn" @click.prevent="remove(e.id)">
            <i class="material-icons">delete</i></a></td>
            <td width="30px"><a class="#004d40 teal darken-4 btn" @click="goTo(d.id)">
            <i class="material-icons">remove_red_eye</i></a></td>
            </tr>
          </tr>
        </tbody>
      </table>
      <a href="" class="btn" @click.prevent="goToPlano(patient.id)"><i class="material-icons left">arrow_back</i>Voltar</a>
  </div>
</template>

<script>
export default {
  name: 'Plan-view',
  data () {
    return {
      showForm: false,
      icon: 'add_circle'
    }
  },
  methods: {
    goToPlano: function (id) {
      this.$router.push('/view/plano-alimentar/pacientes/' + id)
    },
    goTo: function (id) {
      this.$router.push('/view/plano-alimentar/detalhes/refeicao/' + id)
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
    detail () {
      return this.$store.state.detail.detailList
    },
    meal () {
      return this.$store.state.meal.mealList
    },
    patient () {
      return this.$store.state.patient.patientView
    }
  },
  created () {
    let id = this.$route.params.id
    this.$store.dispatch('getMeal', id)
    this.$store.dispatch('getDetail', id)
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
