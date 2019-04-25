<?php

        require_once "../conexion.php";
        require_once "../CRUD.php";


    $id = $_GET['id'];


  
    $obj= new metodos();
    if ($obj->eliminar($id)==1) {
        header("location:../index.php");
    } else {
        echo "fallo al eliminar";
    }
    


?>