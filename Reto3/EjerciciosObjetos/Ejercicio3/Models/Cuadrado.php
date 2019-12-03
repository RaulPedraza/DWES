<?php
require_once "Poligono.php";

class Cuadrado extends Poligono {

    public function area(){
        $anchura = parent::getAnchura();
        $altura = parent::getAltura();

        $area = $anchura * $altura;

        echo $area;
    }
}