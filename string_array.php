<?php 


$fecha1 = "2022/05/10";
$fecha2 = "2023-05-10";
$numeros = "Uno Dos Tres Cuatro Cinco Seis Siete";

//Funcion explode cconvierte un String en Array segun la indicacion:
$array_fecha=explode("/",$fecha1);

echo $array_fecha[0];

echo "<br/>";
//Creamos variable array con funcion explode seguido de las indicaciones "delimiotador" de separacion.
$array_letras=explode(" ",$numeros);
echo $array_letras[2];