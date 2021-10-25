
<?php

require_once('conexiones/conexion.php');

session_start();

class Usuario extends Conexion {


    public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function verusuario()
        {
            $file_path = null;
            $table = $this->db->prepare("SELECT id_usuario,nombres, apellidos,telefono,email,nombre_rol FROM usuario INNER JOIN rol ON usuario.id_rol=rol.id_rol");
            $table->execute();
            while ($result = $table->fetch()) {
                $file_path[] = $result;
            }
            return $file_path;
        }

        public function editarusuario($id_usuario, $nombres, $apellidos, $telefono, $email, $rol)
        {

            $table = $this->db->prepare("UPDATE usuario SET nombres = :nombres, apellidos = :apellidos, telefono = :telefono, email = :email, id_rol = :id_rol WHERE id_usuario = :id_usuario");
            $table->bindParam(':id_usuario', $id_usuario);
            $table->bindParam(':nombres', $nombres);
            $table->bindParam(':apellidos', $apellidos);
            $table->bindParam(':telefono', $telefono);
            $table->bindParam(':email', $email);
            $table->bindParam(':id_rol', $rol);
            
            if ($table->execute()) {
            
                header('Location: ../vista/index.php');
            } else {
                header('Location: ../vista/edit.php');
            }
        }
}



?>


