<?php

//no llega los atributos a los metodo static
    class  miclase{

        public $mensaje = 1;

        public function hola()
        {
            return "hola";
        }

        public static function metodo(){
            //return $this->$mensaje;
            return self::hola();
        }
    }

    echo miclase::metodo();
?>