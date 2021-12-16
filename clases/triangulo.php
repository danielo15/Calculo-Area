<?php

class triangulo 
{
    static function calcularArea($base)
    {
        return (sqrt(3) / 4) * ($base * $base);
    }

    static function calcularPerimetro($lado) {
        return 3 * $lado;
    }

    static function calcularVolumenPrisma($altura,$base) {
        return $this->calcularArea($base) * $altura;
    }

    static function calcularAreaPrisma($altura,$base) {
        return (2 * $this->calcularArea($base)) + (3 * ($altura * $base));
    }
}

