<?php
require_once "Poligono.php";

class Triangulo extends Poligono {

    public function area(){

        $area = ($this->altura * $this->anchura) / 2;

        echo "<p>El area del triangulo es de " . $area . "</p>";
    }
}