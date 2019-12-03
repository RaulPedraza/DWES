<?php
    function buscarPais($pais){
        $paises = ["Brasil","Portugal","Islandia","Mexico","Filipinas","Marruecos"];
        $posicion = -1;
        $mensaje = "";

        for ($x = 0; $x < count($paises); $x++){
            if ($pais == $paises[$x]){
                $posicion = $x;
            }
        }
        if ($posicion != -1){
            $mensaje = $pais . " esta en la posición " . $posicion;
        }else
            $mensaje = $pais . " no esta en la lista";

        return $mensaje;
    }

?>
<p><?php echo(buscarPais("Brasil"))?></p>
<p><?php echo(buscarPais("Portugal"))?></p>
<p><?php echo(buscarPais("Islandia"))?></p>
<p><?php echo(buscarPais("Mexico"))?></p>
<p><?php echo(buscarPais("Filipinas"))?></p>
<p><?php echo(buscarPais("Marruecos"))?></p>
<p><?php echo(buscarPais("España"))?></p>