<?php
include 'pentagono.php';
include 'rectangulo.php'


$respuestaPerimetro;
$respuestaArea;
if(isset($_POST["seleccionar"])){

    switch($_POST["figura"]){
        case "Pentagono":
            $respuestaArea = areaPentagono($_POST["base"], $_POST["apotema"]);
            $respuestaPerimetro = perimetroPentagono($_POST["base"]);
            break;
        case "Rectangulo":
            $respuestaArea = areaPentagono($_POST["base"], $_POST["altura"]);
            $respuestaPerimetro = perimetroPentagono($_POST["base"], $_POST["altura"]);
            break;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">
        Rectangulo:
        <input type="hidden" name="figura" value="Rectangulo">
        <label>Base: <input type="number" name="base"></label>
        <label>Altura: <input type="number" name="altura"></label>
        <input type="submit" value="Seleccionar" name="seleccionar">
    </form>

    <form action="" method="POST">
        Pentagono:
        <input type="hidden" name="figura" value = "Pentagono">
        <label>Base: <input type="number" name="base"></label>
        <label>Apotema: <input type="number" name="apotema"></label>
        <input type="submit" value="Seleccionar" name="seleccionar">
    </form>

</body>
</html>