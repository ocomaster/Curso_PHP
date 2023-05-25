<?php 

$c=1;
while ($c <= 20) {
    echo $c."<br/>";
if ($c==10) {
   break;// hace ructura del ciclo, llegando ghasta el limite indicado.
}
    $c++;
}

echo  "<br/>";

$pc= ["SO","SSD","GPU","RAM","CPU"];
foreach ($pc as $componente) {
    if ($componente == "GPU") {  //Esta condicion hace una pausa cuando la variable se encuentra en la posicion indicada.
        continue;// Continue omite lo que se deba imprimir en esta secuencia, pero mertite continuar con las faltantes
    }
    echo $componente."<br/>";
}