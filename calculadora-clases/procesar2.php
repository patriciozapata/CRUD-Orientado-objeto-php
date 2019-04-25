<?php
     
     require_once "claseCalculo.php";

     $calcular = new calculadora();

	$val1=$_POST['val1'];
	$val2=$_POST['val2'];
	$opcion=$_POST['opcion'];
     
     echo $calcular->calculadorDatos($val1,$val2,$opcion);



?>