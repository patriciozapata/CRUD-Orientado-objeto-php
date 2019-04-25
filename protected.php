<?php
    // solo puede ser accedido  desde herencia de clases o solo de calses hijas
    // debe ser utilizado por un metodo hijo 

    class clasePadre{
        protected function metodo1(){
            return "metodo protegido";
        }
    }

    class clasehija extends clasePadre{

        public function mostrar(){

           return parent::metodo1();

        }


    }

    $obj = new clasehija();
    echo $obj->mostrar();
    
?>