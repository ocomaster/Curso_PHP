<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">
    </div>

    <label for="asignatura"> Asignatura</label>
    <select name="asignatura[]" id="asignatura" multiple>
        <option value="Ingles">Ingles</option>
        <option value="Matematicas">Matematias</option>
        <option value="Ciencias">Cliencias</option>
        <option value="Lenguaje">Lenguaje</option>
    </select>

    <br><br>

    <label for="option-1">        <input type="checkbox" value="Manzana" id="option-1" name="frutas[]">Manzana </label> <br>
     <label for="option-2">        <input type="checkbox" value="Pera" id="option-2" name="frutas[]">Pera</label>   <br> 
     <label for="option-3">        <input type="checkbox" value="Mora" id="option-3" name="frutas[]">Mora </label>    <br> 
    

    <br><br><br><br>

    <button type="submit">Enviar</button>
</form>
    
</body>
</html>