<?php
require_once "Poligono.php";

class Triangulo extends Poligono {

    public function area(){
        $anchura = $this->anchura;
        $altura = $this->altura;

        $area = ($anchura * $altura) / 2;

        echo "<p>El area del triangulo es de " . $area . "</p>";
    }
}