<template>
<div>
{{ nova }}
  <a href="#pacientes/create" class="#1565c0 blue darken-2 btn paciente2"><i class="material-icons left">person_add</i>Novo</a>
  <table>
          <thead>
            <tr>
                <th><h5>PACIENTES</h5></th>
                
                </tr>
          </thead>

          <tbody class="hoverTable">
            <tr v-for="(patient, $index) in patients.data" >
              <td @click="goTo(patient.id)">{{ patient.name }}</td>
            <!-- <td><button @click="addList(patient)" class="btn">add</button></td> -->
            </tr>
          </tbody>
        </table>
          <pagination totalPerPage="6" resource="pacients"></pagination>
 <!--<tbody class="hoverTable">
            <tr v-for="patient in listaExemplo" >
              <td>{{ $index + 1 }} = {{ patient.name }}</td>
            </tr>
          </tbody> -->
        </table>

</div>
</template>

<script>
import Pagination from './../SharedComponent/Pagination'

export default {
  name: 'Patients',
  components: {
    'pagination': Pagination
  },
  data () {
    return {
      idade: '',
      nova: '',
      listaExemplo: []
    }
  },
  methods: {
    goTo: function (id) {
      this.$router.push('/pacientes/' + id)
    },
    addList (patient) {
      this.idade = patient.id += patient.id
      this.nova = this.idade += this.nova
      this.listaExemplo.push(patient)
      let date = this.calculaIdade(patient.date_birth)
      console.log(new Date(date))
    },
    calculaIdade (dateString) {
      var birthday = new Date(dateString)
      return ~~((Date.now() - birthday) / (31557600000))
    }
  },
  computed: {
    patients () {
      return this.$store.state.pagination.getList
    }
  }
}
</script>

<style>
  h5{
    color: #1ac940;
  }

  tbody tr{
    cursor: pointer;
  }
  .hoverTable tr:hover {
   background-color: #f2f2f2;
  }
  .paciente2{
    margin-top: 15px;
    margin-left: 760px;
  }

</style>
