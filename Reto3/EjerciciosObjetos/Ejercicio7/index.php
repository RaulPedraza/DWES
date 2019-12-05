<?php

if(isset($_GET["lado"])){
    $resultado = area($_GET("lado"));

    echo $resultado;
}


function area($lado)
{
    try {
        if ($lado > 0) {
            $resultado = $lado * $lado;

            return $resultado;
        } else
            throw new Exception ("La longitud del lado del cuadrado no puede ser nagativa");
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="index.php" method="get">
        <p>Introduce la longitud del lado del cuadrado: <input type="number" name="lado"></p>
        <input type="submit" name="action" value="Enviar">
    </form>
</body>
</html>