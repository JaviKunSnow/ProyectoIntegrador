<?php

class Arduino {
    private $idArduino;
    private $nombre;

    public function __construct($idArduino, $nombre){
        $this->idArduino = $idArduino;
        $this->nombre = $nombre;
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