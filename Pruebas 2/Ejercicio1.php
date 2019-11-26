<p>
    <strong>Resultado de la conversion (<?php
            if (isset($_GET["temperatura"]) && isset($_GET["tipo"])){
                    print ($_GET["temperatura"] . " " . ($_GET["tipo"]) . "): " . convertir($_GET["temperatura"]));
            }
        ?>
    </strong>
</p>

<form action="Ejercicio1.php" method="get">
    <label> Introduce la temperatura: <input type="text" name="temperatura" id="grados"> </label>
    <p>Indica la unidad de la temperatura introducida:
        <select name="tipo">
            <option name="celsius" value="celsius">Celsius</option>
            <option name="farenheit" value="farenheit">Farenheit</option>
        </select>
    </p>
    <input type="submit" name="enviar" value="Enviar">
</form>


<?php

    function convertir($grados){
        $resultado = 0;
        if ($grados != null) {
            if ($_GET["tipo"] == "celsius") {
                $resultado = ($grados * 9 / 5) + 32;
            } else {
                $resultado = ($grados - 32) * 5 / 9;
            }
        }else
            $resultado = "";

        return ($resultado);
    }

