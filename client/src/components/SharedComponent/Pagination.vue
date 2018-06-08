<template lang="html">
  <center>
    <ul class="pagination">
      <li class="waves-effect" :class="{active: n == active}" v-for="n in parseInt(total)">
        <a href="" @click.prevent="navigate(n)">{{n}}</a>
      </li>

    </ul>
    <p>Exibindo página {{active}} de {{total}}, total de {{totalRegistries}} registros.</p>
  </center>

</template>

<script>
export default {
  name: 'pagination',
  props: [
    'totalPerPage',
    'resource'
  ],
  data: function () {
    return {
      active: 1
    }
  },
  computed: {
    registries () {
      return this.$store.state.pagination.getList
    },
    total () {
      return this.registries.last_page || 0
    },
    totalRegistries () {
      return this.registries.total || 0
    }
  },
  methods: {
    navigate: function (n) {
      this.active = n
      let config = {
        resource: this.resource,
        limit: this.totalPerPage,
        page: n
      }
      this.$store.dispatch('getRegistries', config)
    }
  },
  created () {
    this.$store.dispatch('getRegistries', {resource: this.resource, limit: this.totalPerPage})
  }
}
</script>