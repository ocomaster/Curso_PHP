<?php 
    #Las cookies se crean con la funcion setcookie
    //setcookie("Nombre", valor, expiracion, dir, dominio, secure, httponly)
    setcookie("Idioma", "es", time()+60*60*24*30,"/","localhost",false,false);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_COOKIE['Idioma'];  ?></h1>
</body>
</html>