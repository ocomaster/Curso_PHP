<?php

$edad = 60;
$genero = "F";

if ($genero == "M") {
    if ($edad >= 60) {
        echo "El señor ya se puede jubilar. tiene $edad Años";
    } else {
        echo "El señor no se puede jubilar. tiene $edad Años";
    }
    
}elseif($genero == "F") {
    if ($edad >= 54) {
        echo "La señora ya se puede jubilar. tiene $edad Años";
    } else {
        echo "El señor no se puede jubilar. tiene $edad Años";
    }
}

