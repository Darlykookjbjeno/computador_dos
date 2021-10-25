<?php

require_once("Pasagero.php");

$objPasajero =new Pasagero();

$insertarReg  = $objPasajero -> insertPasagero("30", "juan camilo", "juand34@gmail.com","3148119040" );
echo $insertarReg;

?>