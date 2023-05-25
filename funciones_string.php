<?php 


$texto ="Hola soy brayan";

echo  strtolower($texto);
echo "<br/>";
echo  strtoupper($texto);
echo "<br/>";
echo  ucfirst($texto);
echo "<br/>";
echo  ucwords($texto);

//Contar caracteres
echo "<br/>";
echo  strlen($texto); //funcion que hace captura al total de letras detectada.
echo "<br/>";
echo  str_word_count($texto); //funcion que hace captura a la cantidad de palabras detectada


