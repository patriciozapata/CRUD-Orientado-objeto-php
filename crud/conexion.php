<?php

 class Conectar{
     private $servidor = "localhost";
     private $user="root";
     private $db="articulos";
     private $password="";


    public function Conexion(){
        $conexion = mysqli_connect($this->servidor,$this->user,$this->password,$this->db);

        return $conexion;
    }

 }

 $obj = new Conectar();

 if ($obj->Conexion() ) {
     echo "Esta conectada";
 } else {
     echo "no conectado";
 }
 

?>