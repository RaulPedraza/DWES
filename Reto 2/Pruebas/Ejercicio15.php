<?php
    $marcas = ["Audi","Seat","Mercedes","Volkswagen","BMW","Fiat"];

    function crearLista ($marcas){


        foreach ($marcas as $pais) {
            echo("<li>$pais</li>");
        }
    }
?>

<ul>
    <?php crearLista($marcas)?>
</ul>