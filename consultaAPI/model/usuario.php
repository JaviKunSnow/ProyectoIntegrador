<?php

class Usuario {
    
    private $id;
    private $nombre;
    private $pass;

    public function __construct($id, $nombre, $pass) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->pass = $pass;
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