<?php 

$clave ="HolaMundo123";

echo sha1($clave);
echo "<br/>";
echo md5($clave);

echo "<br/>";
echo hash("md5",$clave);
echo "<br/>";
echo hash("gost-crypto",$clave);

echo "<br/>";
foreach (hash_algos() as  $algoritmos) {
    #Imprimimos resultado de cada tipo de encriptacion junto con la palabra que encrptamos   
    echo $algoritmos." - ".hash($algoritmos, $clave). "<br/>";    
}


echo "<br/>";
echo "<br/>";

#Cada vez que se refresque pantalla, se genera un nuevo hash
echo password_hash($clave, PASSWORD_DEFAULT);
echo "<br/>";
echo password_hash($clave, PASSWORD_BCRYPT);
echo "<br/>";

#$clave ="HolaMundo123";
$clave_procesada = password_hash($clave, PASSWORD_BCRYPT,["cost"=>10]);

//Siguiente paso, verificacion de la clave:
   # echo password_verify($clave,$clave_procesada);

   //Aplicamos condicional simple para verificar que la clave si sea corresta:

    if (password_verify($clave,$clave_procesada)) {
        echo "Acceso permitido";
    }else {
        echo "Contraseña incorrecta";
    }
