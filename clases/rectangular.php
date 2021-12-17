<?php

    function areaRectangular($base, $pro, $altura){
        $area = 2*$altura*($base+$pro)+2*$base*$pro;
        return $area;
    }

    function volumenRectangular($base, $pro, $altura){
        $volumen=$base*$pro^$altura;
        return $volumen;
    }

?>