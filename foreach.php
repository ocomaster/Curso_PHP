<?php 

$laptops = ["Acer Nitro","Windows 11","AMD Ryzen 5","SSD 256GB","RAM 24G"];

$frutas=[
    "Fresa" =>100,
    "Mango" => 500,
    "SAndia" =>700,
    "Melocotones"=> 15
];

foreach ($laptops as $clave => $laptop) {
    echo $clave." - ". $laptop."<br/>";
}
echo "<br/>";

//imprimir nombre y valor de la fruta
foreach ($frutas as $key => $fruta) {
   # echo $key." - ".$fruta. "<br/>";

    echo "Hay ".$fruta." ".$key." En el inventario"."<br/>";
}

echo "<br/>";


$productos = [
    ["codigo" => "A001", "descripcion" =>"Mouse"],
    ["codigo" => "A002", "descripcion" =>"Teclado"],
    ["codigo" => "A003", "descripcion" =>"Monitor"],
    ["codigo" => "A004", "descripcion" =>"Impresora"]
];

foreach ($productos as $prod) {
    echo "Codigo " .$prod["codigo"]." " . $prod["descripcion"]. "<br/>";
    #print_r($prod);
}