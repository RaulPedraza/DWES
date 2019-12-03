<?php
    $listaNumeros = llenarArray();
    $mayor = 0;
    $menor = 1000;

    foreach($listaNumeros as $numero){
        $mayor = mayor($numero, $mayor);
        $menor = menor($numero, $menor);
    }

    echo("<p> El numero mas grande es " . $mayor . " y el numero mas pequeño es " . $menor);

    function llenarArray(){
        $numeros = array();
        do{
            $numero = random_int(1, 999);
            array_push($numeros, $numero);
        }while (count($numeros) < 20);

        return $numeros;
    }

    function mayor($numero, $mayor){
        if ($numero > $mayor){
            $mayor = $numero;
        }
         return $mayor;
    }

    function menor($numero, $menor){
        if ($numero < $menor){
            $menor = $numero;
        }
        return $menor;
    }
?>