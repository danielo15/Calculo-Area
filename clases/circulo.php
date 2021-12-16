<?php

class circulo
{

    static function calcularArea($radio)
    {
        return pi() * ($radio*$radio);
    }

    static function calcularPerimetro($radio)
    {
        return 2 * pi() * $radio;
    }

    static function calcularVolumenCilindro($altura,$radio) {
        return ($this->calcularArea($radio) * $altura);
    }

    static function calcularAreaCilindro($altura, $radio) {
        return (2 * $this->calcularArea($radio)) + (2 * pi() * $radio * $altura);
    }

}