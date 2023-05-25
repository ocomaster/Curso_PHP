<?php 

$precio = 800;
$cantidad = 3;
if ($cantidad < 5) {
    $precio =800;
    $total= $precio*$cantidad;
    echo "Cantidad de llantas son : $cantidad y el total a pagar es: $total" ;
}else if($cantidad > 5){
    $precio =700;
    $total= $precio*$cantidad;
    echo "Cantidad de llantas son : $cantidad y el total a pagar es: $total" ;
}

echo "<br/>";

$calificacion_1 = 9;
$calificacion_2 = 8;
$calificacion_3 = 7;

$promedio = ($calificacion_1+$calificacion_2+$calificacion_3)/3;

if ($promedio < 6 ) {
    echo "El estudiante no aprueba, su nota final es $promedio";
} else {
    echo "El estudiante si aprueba, su nota final es $promedio";
}

