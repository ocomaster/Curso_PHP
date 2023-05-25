<?php 
//Cambiar nombre de la sesion 
session_name("LOGIN");
session_start();

$_SESSION['contador']=1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en PHP</title>
</head>
<body>
<?php echo "Hola tu nombre es: ".$_SESSION['Nombre']. "<br>";  ?>
<?php echo "Tu apellido: ".$_SESSION['Apellido']. "<br>";  ?>
<?php echo "Eres de: ".$_SESSION['Pais']. "<br>";  ?>

<br>

<br>
<a href="cerrar.php"> Eliminar Sesion</a>
    
</body>
</html>