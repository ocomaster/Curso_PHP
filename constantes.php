<?php 

const animales = array("gato","perro");

//print_r(animales);
//echo animales[1];
#Array escalares
$estudiantes =array("Carlos", 18, 1996);
$carros= [
    "renault",
    "chevrolet",
    "Audi"
];

//print_r($estudiantes) ;


#array de tipo asociativo
$tutor=[
    "nombre"=>"Carlos"
    ,"apellido"=>"Vargas"
];

$tutor["apellido"]= "Agudelo";

#print_r($tutor) ;
#echo $tutor["apellido"];


#array de tipo multiple dimensiones

$tutor2=[
    "nombre"=>"Carlos",
    "apellido"=>"Vargas",
    "edad"=>20,
    "cursos"=>["PHP","Python","CSS"]
];
$tutor2["pais"]="Colombia";

print_r($tutor2);

echo $tutor2["cursos"][2];

echo count($estudiantes);