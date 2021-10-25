
<?php
require_once('productos.php');
$modeloproductos = new Productos;
?>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Conectarte | Inicio</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">


<form action="modelo_controlador.php" method="POST" enctype="multipart/form-data">
    
       <input type="file" name="imagen">
       <input type="text" name="nombreimagen">
       <select name="id_productos" id="" class="form-control">
                <?php
                $listarcategorias = $modeloproductos->verproducto();
                if ($listarcategorias != null) {
                    foreach ($listarcategorias as $categorias) {
                ?>
                        <option value="<?= $categorias['id_productos'] ?>"><?= $categorias['nombre_producto']; ?></option>
                <?php
                    }
                }
                ?>
        </select>
       <input type="submit" name="" value="Aceptar">
</form>




<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
</body>
</html>











