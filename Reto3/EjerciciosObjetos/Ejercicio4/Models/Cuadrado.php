<?php
require_once "Poligono.php";

class Cuadrado extends Poligono {
    public function area(){

        $area = $this->anchura * $this->altura;

        echo "<p>El area del cuadrado es de " . $area . "</p>";
    }
}