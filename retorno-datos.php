<?php

    class retornoDatos{
        //tipo String, tipo entero,tipo arreglo,tipo json

        public function retornaString($edad){
            if ($edad > 18) {
                # code...
             return "es mayor de edad";
            }
            else{
                return "No es mayor de edad";
            }
        }
        public function retornaentero($valor){
            if ($valor > 0) {
                # code...
                return "Regrsame 1 ";
            }
            else{
                return 0;
            }
        }

       public function retornoarreglo($ciclos){
        $datos = array();
        for ($i=0; $i < $ciclos; $i++) { 
            # code...
            $datos [$i]= $i;
        }
        return $datos;

       }

       public function retornojson(){
        $arr = array(
            "hdd"=>5050,
            "pantall"=>21,
            "ram"=>8

        );
        return json_encode($arr);
       }
    }

    $obj = new retornoDatos();

    var_dump($obj->retornaString(20));
    echo"<br>";
    var_dump($obj->retornaentero(2)); 
    echo"<br>";
    var_dump($obj->retornoarreglo(2)); 
    echo"<br>";
    var_dump($obj->retornojson()); 

?>