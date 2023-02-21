<?php

class arduinoDAO extends FactoryBD implements DAO {
    
    public static function findAll() {
        $sql = "select * from arduino;";
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arrayArduino = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arrayArduino;
    }

    public static function findByClass($nombre) {
        $sql = "select * from arduino where nombre = ?;";
        $datos = array($nombre);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        if($obj){
            return $obj;
        } else {
            return null;
        }
    }

    public static function insert($objeto) {
        $sql = "insert into arduino values (?,?)";
        $objeto = (array)$objeto;
        $datos = array();
        foreach($objeto as $obj){
            array_push($datos, $obj);
        }
        $datos[0] = null;
        $devuelve = parent::ejecuta($sql,$datos);
        if($devuelve->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }
    
}


?>