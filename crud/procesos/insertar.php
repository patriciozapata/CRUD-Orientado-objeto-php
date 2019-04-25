<?php

require_once "../conexion.php";
require_once "../CRUD.php";



    $name = $_POST['name'];
    $descripcion = $_POST['descripcion'];
    $ciudad = $_POST['ciudad'];

    $datos = array(
        $name,
        $descripcion,
        $ciudad
   );


    $obj= new metodos();
    if ($obj->insertarDatos($datos)==1) {
        header("location:../index.php");
    } else {
        echo "fallo al agregar";
    }
    


?>