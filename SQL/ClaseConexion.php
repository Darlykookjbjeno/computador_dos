<?php


class  Conexion{


    private $host      ="localhost";
    private $user      ="root";
    private $password  ="";
    private $db        ="comoto";
    private $conect;

    public function __construct()
    {
        $conexionbd  ="mysql:hos=". $this->host .";dbname =". $this->db . ";charset=utf8";
        try{
            $this->conect =new  PDO($conexionbd, $this->user,$this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "conexion exitosa";
        }catch(Exception $e){

            $this->conect ='error de conexión';
            echo " ERROR: ". $e->getMessage();
        }
    }
    public function getConect(){
        return $this->conect;
    }

}


?>


