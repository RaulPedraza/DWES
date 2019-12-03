<?php
    include "Publicacion.php";

    $publicacion = new Publicacion("Carlos Perez","1999","Planeta","Hola buenas tardes","Saludos");

    $publicacion->leer();

    $texto = "buenos dineros";

    $publicacion->escribir($texto);

?>

