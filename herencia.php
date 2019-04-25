
<?php
// OBTENER TODAS LA PROPIEDADES DE UNA CLASE A OTRA  MEDIANTE LA PLABARA RESERVADA EXTENS

class Padre {
    public function metodoPadre(){
        return " Hola soy BIG DON DUCK";
    }
    public function metodo1(){
        return "este metodo padre";
    }
}

class hijo extends Padre {
    //self se utiliza par allamar metodos de su calses y parents para llamar metodos de clase hijo
    public function metodohijo(){
        return parent::metodo1();

    }
    public function metodo1(){
        return "este metodo hijo";
    }

}
// $obj = new hijo();
// echo $obj->metodoPadre();

//instancia rapida o 2 punbtacion 


echo hijo::metodohijo();

?>