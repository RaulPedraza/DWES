<?php
    $numero = 1;

    function sumar($numero){
        $contador = $numero;
        $resultado = 0;
        do{
            $resultado = $resultado + $numero + $contador;
            $contador++;
        }while ($contador < ($contador +100));

        echo ("<p>La suma de " . $numero . " hasta " . ($numero + 100) . " es= " . $resultado . "</p>");
    }
?>

<html>
    <head>
        <title>Ejercicio16</title>
    </head>
    <body>
        <?php sumar($numero)?>
    </body>
</html>