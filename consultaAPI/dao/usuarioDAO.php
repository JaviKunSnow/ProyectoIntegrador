<?php

class UsuarioDAO extends FactoryBD implements DAO {

    public static function findAll() {
        $sql = "select * from usuarios;";
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arrayUsuarios = array();
        while($obj = $devuelve->fetchObject()){
            $usuario = new Usuario($obj->id, $obj->nombre, $obj->pass, $obj->rol);
            array_push($arrayUsuarios, $usuario);
        }
        
        return $arrayUsuarios;
    }

    public static function findById($id) {
        $sql = "select * from usuarios where id = ?;";
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchObject();
        if($obj){
            $usuario = new Usuario($obj->id, $obj->nombre, $obj->pass, $obj->rol);
            return $usuario;
        } else {
            return null;
        }
    }

    public static function valida($user, $pass) {
        $sql = "select * from usuarios where nombre = ? and pass = ?;";
        $passh = sha1($pass);
        $datos = array($user, $passh);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchObject();
        if($obj){
            $usuario = new Usuario($obj->id, $obj->nombre, $obj->pass, $obj->rol);
            return $usuario;
        } else {
            return null;
        }
    }

}

?>