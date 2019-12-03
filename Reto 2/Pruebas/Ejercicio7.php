<?php
    $diccionario =[
        "rPedraza" => array (
            "Nombre" => "Raul",
            "Apellido" => "Pedraza",
            "Email" => "raul.pedraza@ikasle.egibide.org"
        ),
        "sZulueta" => array (
            "Nombre" => "Sergio",
            "Apellido" => "Zulueta",
            "Email" => "sergio.zulueta@ikasle.egibide.org"
        ),
        "mBarros" => array (
            "Nombre" => "Miguel",
            "Apellido" => "Barros",
            "Email" => "miguel.barros@ikasle.egibide.org"
        ),
        "jOrtiz" => array (
            "Nombre" => "Julen",
            "Apellido" => "Ortiz de Zarate",
            "Email" => "julen.ortizdezarate@ikasle.egibide.org"
        ),
        "jCastillo" => array (
            "Nombre" => "Julen",
            "Apellido" => "Castillo",
            "Email" => "julne.castillo@ikasle.egibide.org"
        ),
    ];



    function getdatos($diccionario,$user,$dato){
        $resultado = $diccionario[$user][$dato];
        echo $resultado;
    }
?>

<p>El nombre de mBarros es <?= getDatos($diccionario,"mBarros", "Nombre")?></p>


