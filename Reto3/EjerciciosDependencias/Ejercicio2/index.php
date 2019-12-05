<?php
require 'vendor/autoload.php';
require_once "Models/Paciente.php";

use Ejercicio2\Models;

if(isset($_GET["action"])){
    $paciente = new Models\Paciente("Raul","Pedraza","20");

    if ($_GET["action"] == "enfermar"){
        $paciente->enfermar();
    }else
        $paciente->curar();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p><a href='index.php?action=enfermar'>Voy a enfermar</a></p>
    <p><a href='index.php?action=curar'>Me he curado</a></p>
</body>
</html>



