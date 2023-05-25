<?php 

#validacion Expresiones Regulares en php
if (!preg_match("/^[a-zA-Z]{3,10}$/",$_POST['usuario'])) {
    echo "El usuario no coincide con el formato solicitado";
    exit();
}

if (!preg_match("/^[a-zA-Z0-9$@.-]{4,30}$/",$_POST['clave'])) {
    echo "La contraseña no coincide con el formato solicitado";
    exit();
}


if ($_POST['usuario']=="Carlos" && $_POST['clave']=="12345") {

    session_name("LOGIN");
    session_start();


     $_SESSION["Nombre"]="Carlos";
     $_SESSION["Apellido"]="Vargas";
     $_SESSION["Pais"]="Colombia";

     #echo "Sesion iniciada correctamente";
    # header("Location:/curso_php/app/sesiones/contador.php");
    header("Location: contador.php");

    //Mejora si existen encabezados
    if (headers_sent()) {
        echo "<script> window.location.href='contador.php'; </script>";
    }else {
        header("Location: contador.php");

    }
     
    
} else {
    echo "Usuario o Contraseña incorrectos";
    
    header("Location:/curso_php/app/sesiones/index.php");
}


?>