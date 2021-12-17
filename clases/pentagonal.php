<?php

    function areaPentagonal($base, $apo, $altura){
        $area = ($base*$apo*5)+5*$base*$altura;
        return $area;
    }

    function volumenPentagonal($base, $apo, $altura){
        $volumen=(5*$base*$apo/2)*$altura;
        return $volumen;
    }

?>