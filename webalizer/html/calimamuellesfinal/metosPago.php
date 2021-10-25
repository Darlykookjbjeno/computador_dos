<?php

require_once("conexiones/conexion.php");

session_start();

class MetodoPago extends Conexion {


    public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function vermetodopago()
        {
            $file_path = null;
            $table = $this->db->prepare("SELECT id_metodopago,nombre FROM metodopago");
            $table->execute();
            while ($result = $table->fetch()) {
                $file_path[] = $result;
            }
            return $file_path;
        }

        

        public function agregarmetodoPago($nombre){
            $table = $this->db->prepare("INSERT INTO metodopago (nombre) VALUES (:nombre);"); 
            $table->bindParam(':nombre', $nombre);
            
            
            if ($table->execute()) {
                //echo "bien";
                header('Location: ../../template/clienetlte/pages/metodosPago.php');
            }else{
                //header('Location: template/clienetlte/pages/categorias.php');
            echo"esta mal" ;
                       }
        }

}

?>