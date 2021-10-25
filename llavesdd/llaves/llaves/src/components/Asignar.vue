<template>
  <div>
    <div class="modal fade" id="#asignarLlave" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Asignar LLave</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close">   </button> 
                </div>
                <div class="modal-body">
                   <form>
                       <div class="mb-3">
                           <label for="recipient-mae" class="col-from-label">Nombre</label>
                           <input type="text" class="form-control" id="recipient-name">
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  setup() {},
};
</script>

<style scoped>
</style>