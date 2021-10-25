<?php

require_once('../../conexiones/conexion2.php');

$nombre= $_POST['nombre'];
$imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$productos=$_POST['id_productos'];

$query ="INSERT INTO imagenesproductos(nombreimagen,imagen,id_productos) VALUES ($nombre,$imagen,$productos)";
$resultado = $conexion->query($query);

if($resultado){
    echo"si se inserto";
}else{
    echo"no se inserto";
}

?>