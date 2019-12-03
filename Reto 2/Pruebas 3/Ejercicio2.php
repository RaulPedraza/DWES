<?php
function setCookie($texto) {
    setcookie("texto",$texto);
}
function getCookie() {
    $user = $_COOKIE["texto"];
    return $user;
}
function borrarCookie() {
    setcookie("usuario", NULL, -1);
}
?>

<html>
    <head>

    </head>
    <body>

        <form action="Ejercicio2.php" method="get">
            <?php
            echo getCookie();
            if (isset($_GET["texto"])) {
                setCookie($_GET["texto"]);
            }
            if (isset($_GET["borrar"])) {
                borrarCookie();
            }
            ?><br><br>

            <label>Introduce el texto que deseas almacenar: </label>
            <input type="text" name="texto">
            <input type="submit" name="insertar" value="Guardar">

            <input type="button" name="borrar" value="Borrar">
        </form>

    </body>
</html>
