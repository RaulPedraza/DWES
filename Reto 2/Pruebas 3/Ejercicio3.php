<?php
    function setCookie($idioma) {
        setcookie("idioma","$idioma",time() + 60);
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
        <p>Idioma: <?php
            echo getCookie();
            if (isset($_GET["idioma"])) {
                setCookie($_GET["idioma"]);
            } ?>
        </p>
        <form action="Ejercicio3.php" method="get">
            <p>Elige tu idioma
                <select name="idioma">
                    <option>Euskera</option>
                    <option>Castellano</option>
                </select>
            </p>
            <input type="submit" name="bGuardar" value="Guardar">
        </form>
    </body>
</html>
