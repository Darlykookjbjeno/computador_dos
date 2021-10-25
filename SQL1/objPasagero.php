<?php

require_once("autoload.php");

$objPasagero = new Pasagero();

$insert = $objPasagero->insertPasagero("1002965382","darly giron","jinetdarly25@gmail.com","3143543617");
echo $insert;

?>