<?php 


    $numero= $_POST['numero'];
    for ($i=1; $i <= 12 ; $i++) { 
        echo $numero. " X ". $i. " = ". $i*$numero."<br/>";
    }
   



// for ($num=1; $num <= 20 ; $num++) { 
//    echo "Numero: $num"."<br/>";
// }

// Tabla de multiplicar ciclo for

// $numero = 5;
// for ($i=1; $i <= 12 ; $i++) { 
//     echo $i. " X ". $numero. " = ". $i*$numero."<br/>";
// }


// if (isset($_POST['numero']) && $_POST['numero']!="" ) {
//     $numero= $_POST['numero'];
//     for ($i=1; $i <= 12 ; $i++) { 
//         echo $numero. " X ". $i. " = ". $i*$numero."<br/>";
//     }
//     }else{
//         echo "No definida";
    
// }