<?php 
$fruta = "dd";

switch($fruta){
    case "Fresa":
        echo "Eres una fresa";
    break;
    case "Pera":
        echo "Eres una pera";
    break;
    default:
        echo "no eres ni fresa ni pera";

}
echo "<br/>";

$dia = 8;

    switch ($dia) {
        case '1':
           echo "Lunes";
        break;
        case '2':
            echo "Martes";
         break;
         case '3':
            echo "Miercoles";
         break;
         case '4':
            echo "Jueves";
         break;
         case '5':
            echo "Viernes";
         break;
         case '6':
            echo "Sabado";
         break;
         case '7':
            echo "Domingo";
         break;
        
        default:
            echo " No es dia de la semana ";
            break;
    }