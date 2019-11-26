<?php
    $animales = ["Zebra","Leon","Hipopotamo","Aguila"];
    $colores = ["Azul","Naranja","Negro","Rojo"];


    array_push($animales, "Girafa");

    array_unshift($colores, "Verde");

    $arrayConjunto = array_merge($animales, $colores);
?>
    <p>El array animales tiene <?php echo count($animales);?> animales</p>
    <p>El array de colores tiene <?php echo count($colores);?> colores</p>

