<?php
include "Models/Publicacion.php";

    $publicacion = new Ejercicio2\Models\Publicacion("Carlos Perez","1999","Planeta","Hola buenas tardes","Saludos");

    $publicacion-> leer();

    $texto = "buenos dineros";
    $publicacion->escribir($texto);

?>
