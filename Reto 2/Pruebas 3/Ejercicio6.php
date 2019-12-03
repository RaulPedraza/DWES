<?php
session_start();
$usuarios = array(
    "user1" => array(
        "nombre" => "raul",
        "contraseña" => "123"
    ),
    "user2" => array(
        "nombre" => "unai",
        "contraseña" => "456"
    )
);
$_SESSION["user1"] = "123";
$_SESSION["usua2"] = "456";
function comprobarUsuario($usuario, $contraseña){
    if ($_SESSION[$usuario] == $contraseña){
        $_SESSION["mensaje"] = "Hola ".$usuario;
    }
}
if (isset($_GET["usuario"]) && isset($_GET["contraseña"])){
    comprobarUsuario($_GET["usuario"], $_GET["contraseña"], $usuarios);
}
?>

<html>
<head>

</head>
<body>
<form action="Ejercicio5.php" method="get">
    <p>Usuario
        <input type="text" name="usuario">
    </p>
    <p>Constraseña
        <input type="text" name="contraseña">
    </p>
    <input type="submit" value="Guardar">
</form>
</body>
</html>
