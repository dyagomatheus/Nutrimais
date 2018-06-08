<script>
export default {
  name: 'account-create',
  data () {
    return {
      sub_title: 'Adicionando exame',
      patient: {}
    }
  },
  template: require('./ExamForm.html'),
  methods: {
    save () {
      this.$store.dispatch('newPatient', this.patient).then(() => {
        this.$router.push('/pacientes')
      })
    }
  },
  computed: {
    patients () {
      return this.$store.state.patient.PatientsList
    }
  },
  created () {
    this.$store.dispatch('getPatients')
  }
}
</script>