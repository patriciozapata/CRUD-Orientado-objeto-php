<?php


// llamo un metodo dentro de otro metosdo
    class Metodos{
        public function mandarColor($valor){
            if ($valor==1) {
                return "rojo";
            } else if($valor == 2) {
                return "negro";
            }
            else if($valor == 3){
                return "azul";
            }
            
        }
        public function  darDeAltaColor($tipocolor){
            // 1 opciones 
            $obj = new Metodos();

            return $obj->mandarColor($tipocolor);

            //2 opcion
            return self::mandarColor($tipocolor);

        }

    }

    $obj = new Metodos();
    echo $obj->darDeAltaColor(2);

?>