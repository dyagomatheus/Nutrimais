<template>
  <div id="app">
    <nav>
      <div class="nav-wrapper #00c853 green accent-4">
        <img src="./assets/logo.png" class="brand-logo img"/>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#pacients"><i class="material-icons left">restaurant</i>ALIMENTOS</a></li>
          <li><a href="#pacientes"><i class="material-icons left">group</i>PACIENTES</a></li>
          <li><a href="collapsible.html"><i class="material-icons">notifications</i></a></li>
          <li><a href="collapsible.html"><i class="material-icons">settings</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dr. João<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
  </nav>
        <div class="container">
    		   <router-view></router-view>
         </div>
  </div>
</template>

<script>
export default {
  name: 'app',
  styles: [
    require('materialize-css/dist/css/materialize.css'),
    require('material-icons/css/material-icons.css'),
    require('ionicons/dist/css/ionicons.min.css')
  ]
}
</script>

<style>
.img {
  margin-top: 15px;
  margin-left: 10px;
}

</style>
