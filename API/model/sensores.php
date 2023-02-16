<?php

class Sensores {
    private $idSensor;
    private $fecha;
    private $humedad;
    private $temperatura;
    private $personas;
    private $luminosidad;
    private $idArduino;

    public function __construct($idSensor, $fecha, $humedad, $temperatura, $personas, $luminosidad, $idArduino){
        $this->idSensor = $idSensor;
        $this->fecha = $fecha;
        $this->humedad = $humedad;
        $this->temperatura = $temperatura;
        $this->personas = $personas;
        $this->luminosidad = $luminosidad;
        $this->idArduino = $idArduino;
    }

    public function __get($get) {
        if(property_exists(__CLASS__, $get)) {
            return $this->$get;
        }
        
        return null;
    }

    public function __set($clave,$valor) {
        if(property_exists(__CLASS__, $clave)) {
           return $this->$clave = $valor;
        }
        
        return null;
    }

}

?>