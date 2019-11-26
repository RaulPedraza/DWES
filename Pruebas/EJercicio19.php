<?php
    include "funciones.php";

    $numero = 9;

    function sumar($numero){
        $resultado = $numero;
        $divisor = $numero;
        do{
            $primo = buscarPrimo($divisor);
            if ($primo == true){
                $resultado = $resultado + $divisor;
            }
            $divisor--;
        }while($divisor > 1);

        echo ("<p>Si al numero " . $numero . " le sumas todos los numeros primos que hay hasta llegar a el, nos da " . $resultado . "</p>");
    }
?>

<html>
    <head>
        <title>Ejercicio19</title>
    </head>
    <body>
        <?php sumar($numero)?>
    </body>
</html>