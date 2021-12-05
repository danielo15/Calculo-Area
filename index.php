
<?php
/*Inicio codificación: JJB - 05/12/2021*/
/*Fin de codificación: JJB - 05/12/2021*/
require './clases/triangulo.php';
require './clases/circulo.php';
include 'clases/rectangulo.php';
include 'clases/pentagono.php';

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
$respuestaPerimetro;
$respuestaArea;

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
        $radio = intval($_POST['radio']);
    }

    $areaCirculo = number_format($circulo->calcularArea($radio), 2);
    $perimetroCirculo = number_format($circulo->calcularPerimetro($radio), 2);

}


if(isset($_POST["seleccionar"])){

    switch($_POST["figura"]){
        case "Pentagono":
            $respuestaArea = areaPentagono($_POST["base"], $_POST["apotema"]);
            $respuestaPerimetro = perimetroPentagono($_POST["base"]);
            break;
        case "Rectangulo":
            $respuestaArea = areaRectangulo($_POST["base"], $_POST["altura"]);
            $respuestaPerimetro = perimetroRectangulo($_POST["base"], $_POST["altura"]);
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



    <?php
        if(isset($_POST["seleccionar"])){
            echo "El area es: ".$respuestaArea." cm2";
            echo "<br>";
            echo "El perimetro es: ".$respuestaPerimetro." cm";
        }
    ?>
</body>
</html>

