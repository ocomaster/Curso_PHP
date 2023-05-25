<?php 

$texto= "Colombia";

$variable1= $texto;
$variable2= &$texto;

echo $variable1;

