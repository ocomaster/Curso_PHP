<?php 

$edad = 20;

if ($edad >18) {
    echo "El usuario es mayor de edad y tiene $edad";
}

$compras = 120;

if ($compras >100) {

   # $compras = $compras-($compras*0.20);    
   # echo "El total con descuento es $compras";
    $descuento = $compras * 0.20;
    echo "El valor a pagar es: ".$compras;
    echo "<br/>";
    echo " se le realizar un descuento del %20 ";
    echo "<br/>";
    echo "descuento es :".$descuento;
    echo "<br/>";
    echo "El total a pagar es: ".$compras-$descuento;

}