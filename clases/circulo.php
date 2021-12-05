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

}