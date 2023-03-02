<?php

class Acceder {
    
    private $idArduino;
    private $idUsuario;

    public function __construct($idArduino ,$idUsuario) {
        $this->idArduino = $idArduino;
        $this->idUsuario = $idUsuario;
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