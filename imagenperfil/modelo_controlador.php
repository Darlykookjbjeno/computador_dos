<?php

include("conexion.php");
$nombre =$_POST['nombreimagen'];
$productos =$_POST['id_productos'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
//$rol_id =$_POST['rol_id'];
$query="INSERT INTO imagenesproductos(nombreimagen,id_productos, imagen) VALUES('$nombre','$productos','$imagen')";
$resultado = $conexion->query($query);



?>