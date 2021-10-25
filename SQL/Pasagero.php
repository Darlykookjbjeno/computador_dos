<?php

require_once("ClaseConexion.php");


class Pasagero extends Conexion{

    private $PCEDULA;
    private $PNOMBRES;
    private $PEMAIL;
    private $PCELULAR;


public function __construct()
{
    $this->conexion = new Conexion();
    $this->conexion =$this->conexion->getConect();

}
    
public function insertPasagero( string $CEDULA, string $NOMBRES, string $EMAIL, string $CELULAR)
{
    $this->PCEDULA   =$CEDULA;
    $this->PNOMBRES  =$NOMBRES;
    $this->PEMAIL    =$EMAIL;
    $this->PCELULAR  =$CELULAR;


$sql =" INSERT INTO pasagero (PCEDULA,PNOMBRES,PEMAIL,PCELULAR) VALUES(?,?,?,?) ";
$insert = $this->conexion ->prepare($sql);
$arrayData =array ($this->PCEDULA, $this->PNOMBRES, $this->PEMAIL, $this->PCELULAR);
$resInsert = $insert->execute($arrayData);
$idInsert =$this->conexion->lastInsertId();
return $idInsert;

}
}


?>