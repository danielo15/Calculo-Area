
<?php
/*Inicio codificación: JJB - 05/12/2021*/
/*Fin de codificación: JJB - 05/12/2021*/
require './clases/triangulo.php';
require './clases/circulo.php';

//Funciones:


//VARIABLES:

$triangulo = new triangulo();
$circulo = new circulo();
$base = 0;
$altura = 0;
$radio = 0;
$areaTriangulo = 0;
$areaCirculo = 0;
$perimetroTriangulo = 0;
$perimetroCirculo = 0;

if(isset($_POST['triangulo'])){
    
    if(isset($_POST['base'])) {
        $base = intval($_POST['base']);
    }

    if(isset($_POST['altura'])) {
        $altura = intval($_POST['altura']);
    }

    $areaTriangulo = $triangulo->calcularArea($base,$altura);
    $perimetroTriangulo = $triangulo->calcularPerimetro($base);

}

if(isset($_POST['circulo'])) {

    if(isset($_POST['radio'])) {
        $radio = floatval($_POST['radio']);
    }

    $areaCirculo = $circulo->calcularArea($radio);
    $perimetroCirculo = $circulo->calcularPerimetro($radio);

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

    <form action="" method="post">

        <label>Triangulo</label>
        <input type="number" name="base" placeholder="base">
        <input type="number" name="altura" placeholder="altura">
        <input type="submit" name="triangulo">
        
    </form>

    <p>Area triangulo: <?=$areaTriangulo?></p>
    <p>Perimetro triangulo: <?=$perimetroTriangulo?></p>

    <br>

    <form action="" method="post">

        <label>Circulo</label>
        <input type="number" name="radio" placeholder="radio">
        <input type="submit" name="circulo">
        
    </form>

    <p>Area circulo: <?=$areaCirculo?></p>
    <p>Perimetro circulo: <?=$perimetroCirculo?></p>

</body>
</html>
