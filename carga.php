<?php 

// echo $_FILES['fichero']['name']."<br/>";//recibe el nombre
// echo $_FILES['fichero']['tmp_name']."<br/>";// recibe la ruta temporal del archivo
// echo $_FILES['fichero']['type']."<br/>";//Muestra el tipo de archivo
// echo $_FILES['fichero']['error']."<br/>";//si existe une error
// echo $_FILES['fichero']['size']." Peso del archivo en bytes"."<br/>"; // muestra el tamalo del archivo

//esta seria una validacion extra con la cual evitariamos que suban archivos previamente alterados  desde html

// if (mime_content_type($_FILES['fichero']['tmp_name'])!="image/jepg" && mime_content_type($_FILES['fichero']['tmp_name'])!="image/png") {
//     echo "No se esta cargando un tipo de fichero permitido";
//     exit();
// }

//Validacion para que el archivo a subir no sea superior a 3 Mb Ejemplo
#La variable Files size que esta en bytes , se divide en kilo bytes, y si es > a megas
if (($_FILES['fichero']['size']/1024)> 3072) {
    echo "El arviso es puerior al peso permitido";
    exit();
    # code...
}


//Se valida existencia del directorio
if (!file_exists("archivos")) {
    if (!mkdir("archivos",0777)) {
       echo "Error al crear el directorio";
       exit();
    }
}
// se crea funcion para asignar permisos lectura y escritura
chmod("archivos",0777);
   
if (move_uploaded_file($_FILES['fichero']['tmp_name'],"archivos/".$_FILES['fichero']['name'])) {
    echo "Archivo subido correctamente";
} else {
    echo "Error al subir el archivo";
}


