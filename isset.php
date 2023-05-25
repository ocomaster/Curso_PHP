<?php 

//$numero = null;

//unset($numero);

//unset()  nos permite eliminar o destruir una variable.

// if (is_null($numero)) {
//     echo "La variable si es nula";
// } else {
//    echo "La variable no es nula";
// }


// if (empty($numero)) {
//     echo "La variable esta vacia";
// }else {
//     echo "La variable no esta vacia";
// }

// if (isset($numero)) {
//     echo "La variable esta Definida";
// }else {
//     echo "La variable no esta Definida";
// }
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
     
<form action="" method="post">
    <input type="text" name="numero">
    <button type="submit">Enviar</button>
</form>

<?php 
    if (isset($_POST['numero']) && $_POST['numero']!="" ) {
    include "for.php";
    }

    ?>
</body>
</html>
