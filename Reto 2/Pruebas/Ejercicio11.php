<?php

$agenda = [
    array(
        "Amaia",
        "Gorbea Jainaga",
        "945010101",
        "agorbea@php.net"
    ),
    array(
        "Ane",
        "Larrain Ogeta",
        "945010101",
        "alarrain@php.net"
    ),
    array(
        "Maite",
        "Murgiondo Lekue",
        "945010102",
        "mmurgiondo@php.net"
    ),
    array(
        "Lorea",
        "Aranceta Otxoa",
        "945010102",
        "laranceta@php.net"
    ),
    array(
        "Markel",
        "Gurrutxaga Abarra",
        "945010102",
        "mgurrutxaga@php.net"
    ),
    array(
        "Urtzi",
        "Iriondo Baiona",
        "945010102",
        "uriondo@php.net"
    )
];

    function crearAgenda($agenda)
    {
        $x = 0;
        echo("<p>$x</p>");
        while($x < count($agenda)){

            echo ("<tr>");
            $y = 0;
            echo("<td>hola</td>");
            while ($y < count($agenda[$x])){
                //echo("<td>hola</td>");
                //echo("<td>$agenda[$x][$y]</td>");
                $y++;
            }

            echo ("</tr>");
            $x++;
        }
    }
?>

<table>
    <!--<tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Telefono</th>
        <th>Email</th>
    </tr>-->

    <?php crearAgenda($agenda)?>

</table>
