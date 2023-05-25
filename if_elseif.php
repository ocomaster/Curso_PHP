<?php  

$dia = 7;

if ($dia == 1) {
    echo "Lunes";
}elseif ($dia ==2) {
    echo "Martes";
}elseif ($dia ==3) {
    echo "Miercoles";
}elseif ($dia ==4) {
    echo "Jueves";
}elseif ($dia ==5) {
    echo "Viernes";
}elseif ($dia ==6) {
    echo "Sabado";
}elseif ($dia ==7) {
    echo "Domingo";
}else{
    echo "No es  numero valido";
}



// $semana = 0;

// for ($semana=0; $semana < 8; $semana++) { 
//     echo "Dia ".$semana."<br/>";
// }


echo "<br/>";
$computadora= 9;
$precionC = 700;

if ($computadora < 5 ) {

    $total = $computadora * $precionC;
    echo  $total-($total*0.10);
    
} elseif($computadora >= 5 && $computadora < 10) {
    $total = $computadora * $precionC;
    echo  $total-($total*0.20);
}else{
    $total = $computadora * $precionC;
    echo  $total-($total*0.30);
}
