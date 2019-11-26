<?php
    $alumnos = array(
        "Amaia" => 6.5,
        "Ane" => 7.5,
        "Maite" => 5.2,
        "Lorea" => 9.1,
        "Markel" => 6.8,
        "Urtzi" => 8.4
    );

    function crearLista($alumnos){
        foreach ($alumnos as $nombre => $media){
            echo ("<li>La nota media de " . $nombre . " es " . $media . "</li>");
    }
}
?>
<ul>
    <?php crearLista($alumnos)?>
</ul>