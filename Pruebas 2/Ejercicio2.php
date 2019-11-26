<fieldset>
    <legend>Calculadora</legend>
    <form>
        <p>
            Ultimo resultado: <?php isset($_GET["num1"]) && isset($_GET["num2"]) ?
            print (calcular($_GET["num1"],$_GET["num2"])) : ""?>
        </p>

        <p> <label> Primer número: <input type="text" name="num1"> </label> </p>
        <p> <label> Segundo número: <input type="text" name="num2"> </label> </p>
        <p>Seleccione la operación deseada:
            <select name="operacion">
                <option name="suma" value="suma">Suma</option>
                <option name="resta" value="resta">Resta</option>
                <option name="multiplicacion" value="multiplicacion">Multiplicación</option>
                <option name="division" value="division">División</option>
            </select>
        </p>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</fieldset>


<?php
    function calcular($num1,$num2){
        $resultado = 0;

        switch ($_GET["operacion"]){
            case "suma":
                $resultado = $num1 + $num2;
                break;
            case "resta":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacion":
                $resultado = $num1 * $num2;
                break;
            case "division":
                if ($num1 != 0 && $num2 != 0) {
                    $resultado = $num1 / $num2;
                }else
                    $resultado = "ERROR";
                break;
        }

        return $resultado;
    }
