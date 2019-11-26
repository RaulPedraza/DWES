<?php
    $marcas = ["Audi","Seat","Mercedes","Volkswagen","BMW","Fiat"];

    function crearLista ($marcas){
        $x = 0;

        do{
            echo("<li>$marcas[$x]</li>");
            $x++;
        }
        while ($x < count($marcas));
    }
?>

<ul>
    <?php crearLista($marcas)?>
</ul>