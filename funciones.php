<?php 

$valor1 = 3;
$valor2 = 5;


function sumar($valor1, $valor2){
    $resultado = $valor1+ $valor2;
    echo $resultado;
}
echo sumar($valor1, $valor2);

function saludo(){
    return "Hola, mi nombre es: Brayan";
}
echo saludo();


function saludo2($nombre){
    return "Hola, mi nombre es: $nombre";
}
echo saludo2("Carlos");

function promedio_alumno($nota1, $nota2, $nota3){
    $promedio=($nota1+ $nota2 + $nota3)/3;
    return $promedio;

}


echo "El promedio es :".promedio_alumno(7,9,6);;