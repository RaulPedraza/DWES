<?php
function setCookie($texto) {
    setcookie("texto",$texto);
}
function getCookie() {
    $user = $_COOKIE["texto"];
    return $user;
}
?>

<html>
    <head>

    </head>
    <body>
        <form action="Ejercicio1.php" method="get">
            <?php
            echo getCookie();
            if (isset($_GET["texto"])) {
                setCookie($_GET["texto"]);
            }
            ?><br><br>

            <label>Introduce el texto que deseas almacenar: </label>
            <input type="text" name="texto">
            <input type="submit" value="Guardar">
        </form>
    </body>
</html>