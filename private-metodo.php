<?php
//metodo rpivado solo pruede ser accedido desde la misma clase que fue creado
//No puede mostrarse fuera o en instamncia 
// debe manejarse dentro de un metodoo de la misma clase 

            class clase1 {
                private function saludar(){
                    return "Saludando";
                }
                public function mandasaludo(){
                    return self::saludar();
                }
            }

            echo clase1::mandasaludo();


?>