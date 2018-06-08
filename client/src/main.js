// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import { sync } from 'vuex-router-sync'

import Vue from 'vue'
import Vuex from 'vuex'
import VueResource from 'vue-resource'
import VueRouter from 'vue-router'
import Vuetify from 'vuetify'
import LoginInterceptors from './components/Login/interceptors'

Vue.use(LoginInterceptors)
Vue.use(Vuex)
Vue.use(VueResource)
Vue.use(VueRouter)
Vue.use(Vuetify)

import App from './App'
import routes from './router'
import VuexStore from './vuex/store'

Vue.http.options.root = process.env.SERVER

const store = new Vuex.Store(VuexStore)
const router = new VueRouter({
  routes
})

LoginInterceptors.check_empty_token(router)
LoginInterceptors.check_auth(router)

sync(store, router)

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  watch: {
    '$route' (to, from) {
      this.$store.dispatch('clearRegistries')
    }
  },
  template: '<App/>',
  components: { App }
})
