<?php

require_once("autoload.php");


class Pasagero extends Conexion{

    private $pcedular;
    private $pnombres;
    private $pemail;
    private $pcelular;


public function __construct()
{
    $this->conexion = new Conexion();
    $this->conexion =$this->conexion->connect();

}
    
public function insertPasagero( string $cedular,string $nombres , string $email, string $celular )
{
    $this->pcedula   =$cedular;
    $this->pnombres  =$nombres;
    $this->pemail    =$email;
    $this->pcelular  =$celular;


$sql =" INSERT INTO pasagero (pcelular,pnombres,pemail,pcelular) VALUES(?,?,?,?) ";
$insert = $this->conexion ->prepare($sql);
$arrayData =array ($this->pcelular, $this->pnombres, $this->pemail, $this->pcelular);
$resInsert = $insert-> execute ($arrayData);
$idInsert =$this->conexion->lastInsertId();
return $idInsert;
 }
}


?>