<?php
/*Inicio codificación: JJB - 16/12/2021*/
/*Fin de codificación: JJB - 16/12/2021*/
class circulo
{

    function calcularArea($radio)
    {
        return pi() * ($radio*$radio);
    }

    function calcularPerimetro($radio)
    {
        return 2 * pi() * $radio;
    }

    function calcularVolumenCilindro($altura,$radio) {
        return ($this->calcularArea($radio) * $altura);
    }

    function calcularAreaCilindro($altura, $radio) {
        return (2 * $this->calcularArea($radio)) + (2 * pi() * $radio * $altura);
    }

}