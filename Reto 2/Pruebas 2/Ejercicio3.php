<p>El numero aparece <?php isset ($_GET["numero"]) ?
        print (comprobar($_GET["numero"])) : ""?> veces en el array</p>

<form>
    <p>Introduce el numero
        <input type="number" name="numero">
        <input type="hidden" name="array" value="<?php llenarArray()?>">
        <input type="submit" name="enviar" value="¡Probar suerte!">
    </p>
</form>

<?php
    function comprobar($num){
        $resultado = 0;

       
        return $resultado;
    }

    function llenarArray(){
        $numeros = random_int(1, 20);
        $glue = "";
        $stringNumeros = implode($glue, $numeros);
        return $stringNumeros;
    }