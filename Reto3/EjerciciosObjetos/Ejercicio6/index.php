<?php
$resultado = division(5,0);

echo $resultado;


function division ($numero1,$numero2){
    /*try{*/
        if($numero2 != 0){
            $resultado = $numero1 / $numero2;

            return $resultado;
        }else
            throw new Exception ("El segundo numero no puede ser igual a 0");
    /*}catch(Exception $e){
        echo $e->getMessage();
    }*/
}