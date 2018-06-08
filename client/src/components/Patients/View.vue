<template>
  <div>
      <a href="" class="#ffa726 orange lighten-1 btn paciente" @click.prevent="edit(patient.id)"><i class="material-icons left">edit</i>Editar</a>
      <a href="" class="#d84315 deep-orange darken-1 btn paciente" @click.prevent="remove(patient.id)"><i class="material-icons left">delete</i>Excluir</a>
  <nav class="nav-extended paciente">
      <div class="nav-wrapper #81c784 green lighten-1">
        <ul>
        <li class="brand-logo white-text text-darken-2 name">{{ patient.name }}</li>
        </ul>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
      <div class="nav-content #81c784 green lighten-2">
        <ul class="tabs tabs-transparent">
          <li class="tab"><a href="#test1">Antropometria</a></li>
          <li class="tab"><a href="#test4">Anamnese</a></li>
          <li class="tab"><a href="" @click.prevent="goToPlano(patient.id)">Plano Alimentar</a></li>
          <li class="tab"><a href="#test4">Gastos Energéticos</a></li>
          <li class="tab"><a href="" @click.prevent="goToAvaliation(patient.id)">Avaliações Laboratoriais</a></li>
          <li class="tab"><a href="#test4">Prescrição</a></li>
        </ul>
      </div>
    </nav>
    <ul class="collection">
  <li class="collection-item">E-mail: {{ patient.email }}</li>
  <li class="collection-item">Telefone: {{ patient.number_phone }}</li>
  <li class="collection-item">Sexo: {{ patient.sex }}</li>
  <li class="collection-item">Data de Nascimento: {{ patient.date_birth }}</li>
  </ul>
  </div>
</template>

<script>
export default {
  name: 'Patients-view',
  methods: {
    goToPlano: function (id) {
      this.$router.push('/view/plano-alimentar/pacientes/' + id)
    },
    goToAvaliation: function (id) {
      this.$router.push('/view/exams/pacientes/' + id)
    },
    remove: function (id) {
      this.$store.dispatch('removePatient', this.$route.params.id)
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
    patient () {
      return this.$store.state.patient.patientView
    }
  },
  created () {
    this.$store.dispatch('getPatient', this.$route.params.id)
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
