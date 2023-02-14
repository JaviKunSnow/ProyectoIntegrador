<?php

class Usuario {
    
    private $id;
    private $usuario;
    private $pass;

    public function __construct($id, $usuario, $pass) {
        $this->usuario = $usuario;
        $this->id = $id;
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