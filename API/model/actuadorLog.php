<?php

class ActuadorLog {
    private $idActuador;
    private $fecha;
    private $actuador;
    private $causa;
    private $idArduino;

    public function __construct($idActuador, $fecha, $actuador, $causa, $idArduino){
        $this->idActuador = $idActuador;
        $this->fecha = $fecha;
        $this->actuador = $actuador;
        $this->causa = $causa;
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