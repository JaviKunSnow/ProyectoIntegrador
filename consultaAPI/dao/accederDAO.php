<?php

class AccederDAO extends FactoryBD implements DAO {

    public static function findAll() {
        $sql = "select * from acceder;";
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arrayAccess = array();
        while($obj = $devuelve->fetchObject()){
            $access = new Acceder($obj->idArduino, $obj->idUsuario);
            array_push($arrayAccess, $access);
        }
        
        return $arrayAccess;
    }

    public static function findById($id) {
        $sql = "select * from acceder where idUsuario = ?;";
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchObject();
        if($obj){
            $access = new Acceder($obj->idArduino, $obj->idUsuario);
            return $access;
        } else {
            return null;
        }
    }

}

?>