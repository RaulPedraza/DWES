<?php

    function buscarPrimo($numero){
        $primo = false;
        $divisor = $numero;
        $contador = 0;
        for ($divisor; $divisor != 0; $divisor--){
            if($numero%$divisor == 0){
                $contador ++;
            }
        }

        if ($contador > 2){
            $primo = true;
        }

        return $primo;
    }