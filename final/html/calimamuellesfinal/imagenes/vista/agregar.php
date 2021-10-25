<?php

require_once('../../imagen.php');

$modeloimagen= new Imagenes;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><br/><br/><br/>
        <form action="../controlador/agregar.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="nombre de imagen" value=""/>
        <input type="file" name="imagen"/><br/><br/>
        <select type="text" name="id_productos" >
        <?php
                $listarproductos = $modeloimagen->verproductos();
                if ($listarproductos != null) {
                    foreach ($listarproductos as $productos) {
                ?>
                        <option value="<?= $productos['id_productos'] ?>"><?= $productos['nombre_producto']; ?></option>
                <?php
                    }
                }
                ?>
        </select>
        <input type="submit" value="aceptar">
        </form>
    </center>
</body>
</html>