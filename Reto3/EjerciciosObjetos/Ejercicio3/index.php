<?php
include "Models/Triangulo.php";
include "Models/Cuadrado.php";


    $poli1 = new Triangulo("azul","4","6");
    $poli2 = new Cuadrado("rojo","5","8");

    $poli1->area();
    $poli2->area();
?>