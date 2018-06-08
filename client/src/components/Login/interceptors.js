import Vue from 'vue'

let getToken = function () {
  let token = localStorage['token']
  if (!token) {
    token = '{}'
  }
  return JSON.parse(token)
}

let token = getToken()

let login = function (router) {
  router.push('./login')
}

export default {
  check_empty_token: function (router) {
    token = getToken()
    if (!token.access_token) {
      login(router)
    }
  },
  check_auth: function (router) {
    token = getToken()
    Vue.http.interceptors.push((request, next) => {
      request.headers.set('Authorization', 'Bearer ' + token.access_token)
      next(res => {
        if (res.status === 0 || res.status === 401) {
          login(router)
        }
      })
    })
  }
}
