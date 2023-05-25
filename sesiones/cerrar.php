<?php 


session_name("LOGIN");
session_start();

session_destroy();
#Redireccion a index, al momento de cerrar sesion
#header("Location:/curso_php/app/sesiones/index.php");


//Mejora si existen encabezados
if (headers_sent()) {
    echo "<script> window.location.href='index.php'; </script>";
}else {
    header("Location: index.php");

}
 


?>