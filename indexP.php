<?php 
//Recibir parametros con variable Global

// $nombre = $_POST['nombre'];
// $asignatura = $_POST['asignatura'];
// $frutas = $_POST['frutas'];


// echo $nombre;
// echo "<br/>";
// echo $asignatura;
// echo "<br/>";
// echo $frutas;

//var_dump($_POST['asignatura']);

$materias = $_POST['asignatura'];
foreach ($materias as $value) {
    echo $value."<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";

$frutas = $_POST['frutas'];
foreach ($frutas as $fruta) {
    echo $fruta."<br/>";
}