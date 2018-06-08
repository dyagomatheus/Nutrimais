<template>
<div>
	<div class="box-parent-login">
	<div class="well bg-white box-login">
		<center><h1 class="ls-login-logo"><img src="./../../assets/nutrimais.png" width="360" height="130" /></h1></center>
		
		<form role="form" @submit.prevent="login">
			<fieldset>
 
				<div class="form-group ls-login-user">
					<label for="userLogin">Usuário</label>
					<input class="form-control ls-login-bg-user input-lg" id="userLogin" type="text" aria-label="Usuário" placeholder="Usuário" v-model="user.username">
				</div>
 
				<div class="form-group ls-login-password">
					<label for="userPassword">Senha</label>
					<input class="form-control ls-login-bg-password input-lg" id="userPassword" type="password" aria-label="Senha" placeholder="Senha" v-model="user.password">
				</div>
 
				<a href="#" class="ls-login-forgot">Esqueci minha senha</a>
 
				<input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block">
				<p class="txt-center ls-login-signup">Não possui um usuário na Nutrimais?
					<a href="#">Cadastre-se agora</a>
				</p>
 
			</fieldset>
		</form>
	</div>
</div>
</div>
</template>
<script>
import Vue from 'vue'
import { CONFIG } from './../../config'
import LoginInterceptors from './interceptors'

export default {
  name: 'login',
  data: function () {
    return {
      user: {
      }
    }
  },
  methods: {
    login: function () {
      let data = {
        grant_type: 'password',
        client_id: CONFIG.client_id,
        client_secret: CONFIG.client_secret,
        username: this.user.username,
        password: this.user.password,
        scop: ''
      }
      Vue.http.post('oauth/token', data).then(res => {
        localStorage['token'] = JSON.stringify(res.body)
        LoginInterceptors.check_auth(this.$router)
        this.$router.push('/pacientes')
      })
    }
  }
}
</script>
<style>
	
</style>