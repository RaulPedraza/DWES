<?php
require_once "Poligono.php";

class Cuadrado extends Poligono {

    public function area(){
        $anchura = $this->anchura;
        $altura = $this->altura;

        $area = $anchura * $altura;

        echo "<p>El area del cuadrado es de " . $area . "</p>";
    }
}