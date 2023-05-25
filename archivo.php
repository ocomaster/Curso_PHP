<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de archivo</title>
</head>
<body>

<h3>Subir archivos con PHP</h3>
<!-- Formulario para envio de una imagen -->
 <form action="carga.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fichero" accept=".jpg, .png, .jpeg">
    <br><br>
    <button type="submit">Enviar</button> 

 </form>    

</body>
</html>