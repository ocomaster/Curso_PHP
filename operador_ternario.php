<?php
$promedio = 4;

echo "<br/>";
echo "Operador ternario";
echo "<br/>";
echo $promedio = ($promedio < 6 ) ? "No aprueba y su nota final es $promedio" : "Si aprueba y su nota final es $promedio" ;


echo "<br/>";
$precioCamisa = 10;
$CantidadCamisas = 2 ;
$total = $CantidadCamisas * $precioCamisa ;
echo "<br/>";
$total=($CantidadCamisas>= 3) ? $total-($total*0.20): $total-($total*0.10);

// 70- (70*0.20)
// 70- 14
// 56

echo "El total a pagar es ".$total;

