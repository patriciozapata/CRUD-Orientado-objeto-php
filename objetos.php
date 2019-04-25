<?php
    class miClases{

        public $resultado = 0;

        public function miMetodo($v1,$v2){


           this->resultado=$v1+$v2;

            return this->resultado;
        }
    }
    //termina la clñase 
    //puedo instanciar o declarar un objeto
    $obj = new miClases();

    //llamo mi metodo
    echo $obj->miMetodo(5,5);
?>