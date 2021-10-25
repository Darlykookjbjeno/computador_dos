<template>
  <div class="inicio">

    <br />
    <div class="row">
      <div class="col-2 uno"></div>



      <div class="col-8 dos">

          <span>Zonas </span>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Industrial
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong class="row">

                    <div class="card" style="width: 18rem">
                        <div class="card-body">
                        <h5 class="card-title">Nombre</h5>
                        <h6 class="card-subtitle mb- text-muted">
                            Card subtitle
                        </h6>
                        <hr/>
                    <div class="conte">
                        <button class="boton">Asignar</button>
                        <a href="#" class="card-link"><img src="@/assets/desbloquear.png" style= "height:40px;"></a>
                    </div>
                        </div>

                    </div>


                    <div class="card" style="width: 18rem">
                        <div class="card-body">
                        <h5 class="card-title">Nombre</h5>
                        <h6 class="card-subtitle mb- text-muted">
                            Card subtitle
                        </h6>
                        <hr/>
                    <div class="conte">
                        <button class="boton">Asignar</button>
                        <a href="#" class="card-link"><img src="@/assets/desbloquear.png" style= "height:40px;"></a>
                    </div>
                        </div>

                    </div>

                    <div class="card" style="width: 18rem">
                        <div class="card-body">
                        <h5 class="card-title">Nombre</h5>
                        <h6 class="card-subtitle mb- text-muted">
                            Card subtitle
                        </h6>
                        <hr/>
                    
                        <button class="boton">Asignar</button>
                        <a href="#" class="card-link"><img src="@/assets/desbloquear.png" style= "height:40px;"></a>
                    
                        </div>

                    </div>

                </strong>
              </div>

            </div>

            
          </div>
        </div>
      </div>

      <div class="col-0 tres"></div>
    </div>
  </div>
</template>



<script>



export default {
  name: 'Inicio',
  data(){
    return{
      showModal:false
    }
  }
  
};
</script>


<style  scoped>
.boton{
    background-color: rgb(248, 125, 37);
    border-radius: 10px;
    height: 30px;
    width: 100px;
    text-align: center;
    
}

.boton:hover{
    background-color: gray;
    color:black;
}
.accordion-button:not(.collapsed) {
    color: #e69947;
    background-color: #e7f1ff;
    box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
}

.accordion-button{
    background-color: rgb(212, 211, 211) !important;
}



.card{
  
  display:flex;
  margin: 0 5px;
}

.accordion-button:focus {
    z-index: 3;
    border-color: #ffffff;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgb(241, 190, 153);
}

.accordion-button{
  font-size:25px;
}

.card{
  
  font-size: 1.1rem;
  letter-spacing: 0.1rem;
  box-shadow: 0px 0px 8px rgb(177, 177, 177);
  transform: scale(1);
  transition: all 0.2s;
}
.card:hover{

background: #eccfb0;
transform: scale(1.05);
}

</style>
