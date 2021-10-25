<template>
  <div id="app">
    
    <div class="container-fluid ">
     
      <div class="d-flex bd-highlight">
        <div class="p-3 w-100 bd-highlight">
          <a>
              <router-link to="/Inicio">  <img src="@/assets/logoUno.png" style="height:50px;"/> </router-link>
           </a>
        </div>
        <div class="p-3 flex-shrink-1 bd-highlight">
          <a>
            <router-link to="/Inicio"> <img src="@/assets/usuario.png" style="height:40px;">  </router-link>
          </a>
        </div>
      </div>

    </div>
<Inicio/>
    <router-view />
  </div>
</template>
<script>

import Inicio from  "@/components/Inicio.vue"

export default {
  name:"App",
  
  components:{
    Inicio
  }
  
}
</script>

<style>
.container-fluid {
  background-color: rgb(180, 174, 174);
  
}

a {
  
  color: black!important;
  text-decoration: none!important;
}

</style>
