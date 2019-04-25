<?php

require_once "../conexion.php";
require_once "../CRUD.php";


    $id = $_POST['id'];
    $name = $_POST['name'];
    $descripcion = $_POST['descripcion'];
    $ciudad = $_POST['ciudad'];

    $datos = array(
        $id,
        $name,
        $descripcion,
        $ciudad
   );


    $obj= new metodos();
    if ($obj->actualizar($datos)==1) {
        header("location:../index.php");
    } else {
        echo "fallo al agregar";
    }
    


?>