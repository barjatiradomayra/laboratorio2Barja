<?php
include "operacion.php";
$ope=new operacion(2,"examen",1,8,3);
if($_GET["opcion"]=="fibonacci"){
    echo "fibonacci <br><hr>";
    $ope->calcularFibonacci();

}
if($_GET["opcion"]=="mayor"){
	echo "Mayor de 3 numeros <br><hr>";
	$ope->mayor();
}
if($_GET["opcion"]=="piramide"){
	echo "Piramide <br><hr>";
	$ope->Piramide();
}
?>