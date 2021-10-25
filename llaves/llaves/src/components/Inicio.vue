<template>
  <div class="inicio">
    <br />
    <div class="row">
      <div class="col-2 uno"></div>

      <div class="col-8 dos">
        <div class="titulo">
          <span class="zona">Zonas </span>
        </div>
        <hr />
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
                Industrial
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong class="row">
                  <div class="card" style="width: 22rem">
                    <div class="card-body">
                      <h5 class="card-title mb- text-muted">
                        Nombre
                         <img class="img" src="@/assets/llve.png" style="width:100px; heigth:30px;">
                        </h5>
                      <h6 class="card-subtitle mb- text-muted">
                        Nombre Instructor 
                       
                      </h6>
                      
                      <hr />
                          
                      <button class="boton" >
                        <router-link to="/Asignar">asignar</router-link>
                      </button>
                      <a href="#" class="card-link"
                        ><img
                          src="@/assets/candado-abierto.png"
                          style="height: 40px"
                          
                      /></a>
                    </div>
                  </div>


                  
                </strong>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-2 tres">
        <button class="btn btn-primary llaves">
          llaves
        </button>
      </div>
    </div>


  </div>

</template>




<script>
export default {
  name: "Inicio",
  data() {
    return {
      showModal: false,
    };
  },

  methods: {
    /*showAlert(){
            this.$swal('Listo!');
        },*/

        /*v-on:click="showAlert"*/

        /*v-on:click="showAlertConfirm"*/


    showAlertConfirm() {


      this.$swal({
     
        title: "Asignar LLave",
        image:"https://www.qrcode-monkey.com",
        template: '#feature-template',
        html:"<hr/><input id='swal-input' placeholder='Nombre' class='form-control warning mb-1' type='text'><img src='logo.png'><hr/>",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#e69947",
        cancelButtonColor: "black",
        confirmButtonText: "Asignar!",
      }).then((result) => {
        if (result.value) {
          this.$swal({
            icon:"success",
            title:"Listo!",
            confirmButtonColor:"#e69947",

          });
          
        }
      });
    },
  },
};
</script>


<style  scoped>
.boton {
  background-color: rgb(248, 125, 37);
  border-radius: 6px;
  border: #e69947;
  height: 35px;
  width: 120px;
  text-align: center;
  font-size: 1rem;
  letter-spacing: 0.1rem;
  padding: 3px;
  border: 3px double #e69947;
}

.boton:hover {
  background-color: gray;
  color: black;
}
.accordion-button:not(.collapsed) {
  color: #e69947;
  font-size: 1.8rem;
  letter-spacing: 0.1rem;
  background-color: #e7f1ff;
  box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
}

.accordion-button {
  background-color: rgb(212, 211, 211) !important;
  color: black;
  font-size: 1.8rem;
  letter-spacing: 0.1rem;
}

.card {
  display: flex;
  margin: 0 5px;
}

.accordion-button:focus {
  z-index: 3;
  border-color: #ffffff;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgb(241, 190, 153);
}

.accordion-button {
  font-size: 25px;
}

.card {
  font-size: 1.1rem;
  letter-spacing: 0.1rem;
  box-shadow: 0px 0px 8px rgb(177, 177, 177);
  transform: scale(1);
  transition: all 0.2s;
}
.card:hover {
  background: #eccfb0;
  transform: scale(1.05);
}

.zona {
  font-size: 1.1rem;
  letter-spacing: 0.1rem;
}

.titulo {
  text-align: center;
}

.form-control:hover{

background-color: #e69947;
}
.img{
  margin: 0px 50px;
}
.llaves{
  width:70px;
  height:70px;
  border-radius:70px;
  background-color: #e69947;
  border:#e69947;
}
.llaves:hover{
  width:80px;
  height:80px;
  border-radius:80px;
  background-color: #e69947;
  border:#e69947;
  color:black;
}
.tres{
  
   padding: 0 6rem;
 
}
</style>
