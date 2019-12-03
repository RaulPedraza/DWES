<?php
    $ciudades = ["Paris","Berlin","Amsterdam","Praga"];

    $resultado1 = getValor($ciudades,1);
    $resultado2 = setValor($ciudades, 1,"Madrid");

    echo $resultado1;
    echo $resultado2;


    function getValor($ciudades, $posicion){
        return $ciudades[$posicion];
    }


    function setValor($ciudades, $posicion, $valor){
        $ciudades[$posicion] = $valor;
        return $ciudades[$posicion];
    }
?>