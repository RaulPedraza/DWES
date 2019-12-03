<?php
    $grupos = ["System of a down","Sabaton","Alestorm","Iron Maiden","Volveat","AC/DC","Judas Priest","Korn"];

    function mostrar($grupos){
        foreach($grupos as $grupo) {
            echo("<p>$grupo</p>");
        }
    }
?>
<html>
<head>
    <title>Ejercicio16</title>
</head>
<body>
    <?php mostrar($grupos)?>
</body>
</html>