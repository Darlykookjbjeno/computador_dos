<?php

require_once("ClaseConexion.php");

class Rutas extends Conexion{

private $id_rutas;
private $rnombre;
private $rcosto;

public function __construct()
{
    $this->conexion =new conexion();
    $this->conexion = $this->conexion ->getConect();
}

public function insertRutas(string $id_rutas, string $nombres, float $costo){
 $this->id_rutas        =$id_rutas;
 $this->rnombres        =$nombres;
 $this->rcosto          =$costo;     
 
$sql = "INSERT INTO rutas($id_rutas,$nombres,$costo) VALUES (?,?,?)";
$insert = $this->conexion ->prepare($sql);
$arrayData =array ($this->id_rutas, $this->rnombres, $this->rcosto);
$resInsert = $insert->execute( $arrayData );
$idInsert =$this->conexion->lastInsertId();
return $idInsert;

}



}




?>