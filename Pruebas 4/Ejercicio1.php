<?php
function connect(){
    $dbname = "alumnos";
    $host = "localhost";
    $user = "root";
    $pass = "";

    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function lanzarCosulta($dbh){
    
}