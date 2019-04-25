<?php

class metodos{

    public function mostrardatos($sql){
        $obj = new Conectar();
        $Conexion= $obj->Conexion();

        $result = mysqli_query($Conexion,$sql);

        return mysqli_fetch_all($result,MYSQLI_ASSOC);

    }

    public function insertarDatos ($datos){

        $obj = new Conectar();
        $Conexion= $obj->Conexion();

        $sql = "INSERT INTO articulos (articulo_titulo,descripcion_ar,ciudad) values ('$datos[0]','$datos[1]','$datos[2]')";

        return $result = mysqli_query($Conexion,$sql);


    }

    public function actualizar($datos){
        $obj = new Conectar();
        $Conexion= $obj->Conexion();

        $sql ="UPDATE articulos set articulo_titulo= '$datos[1]',
                                    descripcion_ar= '$datos[2]',
                                    ciudad= '$datos[3]'
                                    where id = '$datos[0]'";

         return $result = mysqli_query($Conexion,$sql);
    }

    public function eliminar($id){
        $obj = new Conectar();
        $Conexion= $obj->Conexion();

        $sql= "DELETE from articulos where id = '$id'";

        return $result = mysqli_query($Conexion,$sql);
    }


}

?>