<?php
require_once "Poligono.php";

class Triangulo extends Poligono {

    public function area(){
        $anchura = parent::getAnchura();
        $altura = parent::getAltura();

        $area = ($anchura * $altura) / 2;

        echo $area;
    }
}