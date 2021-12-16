<?php
/*Inicio codificación: JJB - 16/12/2021*/
/*Fin de codificación: JJB - 16/12/2021*/
class triangulo 
{
    function calcularArea($base)
    {
        return (sqrt(3) / 4) * ($base * $base);
    }

    function calcularPerimetro($lado) {
        return 3 * $lado;
    }

    function calcularVolumenPrisma($altura,$base) {
        return $this->calcularArea($base) * $altura;
    }

    function calcularAreaPrisma($altura,$base) {
        return (2 * $this->calcularArea($base)) + (3 * ($altura * $base));
    }
}

