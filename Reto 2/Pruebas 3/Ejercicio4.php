<?php
session_start();
function setSesion($asistente){
    if(!isset($_SESSION["asistentes"])){
        $_SESSION["asistentes"] = array();
    }
    array_push($_SESSION["asistentes"],$asistente);


}
?>
<html>
    <head>

    </head>
    <body>
        <h1>Lista de asistentes</h1>
        <ul>
        <?php
            if(isset($_GET["asistente"])){
                setSesion($_GET["asistente"]);
                foreach ($_SESSION["asistentes"] as $asistente) {
                    echo("<li>" . $asistente . "</li>");
                }
            }
        ?>
        </ul>

        <form action="Ejercicio4.php" method="get">
            <h2>Añadir asistente</h2>
            <input type="text" name="asistente">
            <input type="hidden" name="accion" value="insertar">
            <input type="submit" name="bAñadir" value="Añadir">
        </form>

        <a href="Ejercicio4.php?accion=vaciar">Vaciar lista</a>
    </body>
</html>
