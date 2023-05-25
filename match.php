<?php 

$a = 7;

$x =10;
$y = 9;
$z= 7;

$resultado = match($a){
    $x => "valor igual a X",
    $y => "valor igual a Y",
    $z => "valor igual a Z",
    default => "No coincide con ninguna"
};

echo $resultado;

$edad = 18;

$Result = match(true){

    $edad >= 18 => "Eres adulto joven",
    $edad >= 30 => "Eres adulto ",
    $edad >= 60 => "Eres adulto Tercera edad",
    default => "Eres menor de edad"

};

echo "<br/>";

echo $Result;