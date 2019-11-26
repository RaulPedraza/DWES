<?php
    function diaSemana($num){
        switch ($num){
            case 1:
                echo ("El dia " . $num . " de la semana es lunes");
                break;
            case 2:
                echo ("El dia " . $num . " de la semana es martes");
                break;
            case 3:
                echo ("El dia " . $num . " de la semana es miercoles");
                break;
            case 4:
                echo ("El dia " . $num . " de la semana es jueves");
                break;
            case 5:
                echo ("El dia " . $num . " de la semana es viernes");
                break;
            case 6:
                echo ("El dia " . $num . " de la semana es sábado");
                break;
            case 7:
                echo ("El dia " . $num . " de la semana es domingo");
                break;
            default:
                echo ("El numero " . $num . " no pertenece a ningun dia de la semana");
                break;
        }
    }
?>
<p><?= diaSemana(1)?></p>
<p><?= diaSemana(2)?></p>
<p><?= diaSemana(3)?></p>
<p><?= diaSemana(4)?></p>
<p><?= diaSemana(5)?></p>
<p><?= diaSemana(6)?></p>
<p><?= diaSemana(7)?></p>
<p><?= diaSemana(8)?></p>
