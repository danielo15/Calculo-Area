<?php

$area;
$perimetro;
$mensaje;
if(isset($_POST["calcular"])){

    switch($_POST["opcion"]){
        case "pentagono":
            calcularArea();
            calcularPerimetro();
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
        <select name="opcion">
            <option value="pentagono">Pentagono</option>
            <option value="rectangulo">Rectangulo</option>
            <option value="circulo">Circulo</option>
            <option value="triangulo">Triangulo</option>
        </select>

        <input type="submit" value="Seleccionar" name="seleccionar">
    </form>

    <form action="" method="POST">
        <label></label>


    <form>

</body>
</html>