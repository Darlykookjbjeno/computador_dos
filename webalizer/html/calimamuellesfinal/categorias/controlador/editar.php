<?php 
    require_once('../../categorias.php');

    if ($_POST) {
        $Modelocategoria = new Categorias();
        $id = $_POST['id_categoria'];
        $nombre = $_POST['nombre_categoria'];
    
        //$Modelocategoria->editarcategoria($id, $nombre);

        echo"biennnnnnnn";
    } else {
        //header('Location: ../../index.php');
        echo"esta mal";
    }
?>