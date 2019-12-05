<?php
namespace Ejercicio2\Models;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
class Paciente {

    private $nombre;
    private $apellidos;
    private $edad;


    public function __construct($nombre,$apellidos,$edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->log = new Logger('pacientes');
        $this->log->pushHandler(new StreamHandler('app.log', 0, Logger::DEBUG, 0777));
    }

    public function enfermar(){
        $this->log->warning('He enfermado');
    }

    public function curar(){
        $this->log->warning('Me he curado');
    }

}