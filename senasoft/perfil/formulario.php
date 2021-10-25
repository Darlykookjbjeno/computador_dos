<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>actualizar Datos</title>
</head>
<body>

<form id="guardarDatos">
  <div class="modal fade" id="actualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel">Actualizar Datos</h4>
        </div>
        <div class="modal-body">

        <div class="form-group">
              <label for="nombre0" class="control-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre0" name="nombre" required maxlength="45">
            </div>
        <div class="form-group">
              <label for="moneda0" class="control-label">Apellido:</label>
              <input type="text" class="form-control" id="moneda0" name="moneda" required maxlength="3">
            </div>
        <div class="form-group">
              <label for="capital0" class="control-label">Email:</label>
              <input type="text" class="form-control" id="capital0" name="capital" required maxlength="30"> 
            </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar datos</button>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>