<?php
namespace Ejercicio2\Models;

class Publicacion {
    private $autores;
    private $año;
    private $editorial;
    private $titulo;
    private $texto;

    public function __construct($autores,$año,$editorial,$titulo,$texto)
    {
        $this->autores = $autores;
        $this->año = $año;
        $this->editorial = $editorial;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }

    public function leer(){
        echo $this->texto;
    }

    public function escribir($string){
        $this->texto= $this->texto . $string;
        echo $this->texto;
    }

    public function getAutores()
    {
        return $this->autores;
    }

    public function setAutores($autores)
    {
        $this->autores = $autores;
    }

    public function getAño()
    {
        return $this->año;
    }

    public function setAño($año)
    {
        $this->año = $año;
    }

    public function getEditorial()
    {
        return $this->editorial;
    }

    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getTexto()
    {
        return $this->texto;
    }

    public function setTexto($texto)
    {
        $this->texto = $texto;
    }


}
?>