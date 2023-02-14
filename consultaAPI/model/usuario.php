<?php

class Usuario {
    
    private $idUsuario;
    private $nombre;
    private $pass;
    private $rol;

    public function __construct($idUsuario, $nombre, $contraseña, $rol) {
        $this->idUsuario = $idUsuario;
        $this->contraseña = $contraseña;
        $this->nombre = $nombre;
        $this->rol = $rol;
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