<?php
    $numeros =[5,4,8,1,9];

    function comparar($numeros,$posicion,$valor){
        if ($numeros[$posicion] > $valor){
            echo ($valor . " es mas pequeño que " . $numeros[$posicion]);
        }elseif ($numeros[$posicion] < $valor){
            echo ($valor . " es mas grande que " . $numeros[$posicion]);
        }else
            echo ($valor . " es igual a " . $numeros[$posicion]);

    }
?>

<p><?= comparar($numeros,"4","4")?></p>
<p><?= comparar($numeros,"4","10")?></p>
<p><?= comparar($numeros,"4","9")?></p>