<?php

require_once("Rutas.php");


$objRutas =new Rutas();

$insert = $objRutas -> insertRutas("30", "popayan-pitalito", 150000 );
echo $insert;

?>