<?php

class triangulo 
{
    static function calcularArea($base, $altura)
    {
        return ($base * $altura) / 2;
    }

    static function calcularPerimetro($lado)
    {
        return 3 * $lado;
    }
}
