<?php

$conexion = new mysqli("localhost", "root", "" ,"calimamuelles");
if ($conexion) {
	echo "siii";
}else{
	echo "no exit";
}

?>