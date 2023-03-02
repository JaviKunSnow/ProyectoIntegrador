<?php

class UsuarioDAO extends FactoryBD implements DAO {

    public static function findAll() {
        $sql = "select * from usuarios;";
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arrayUsuarios = array();
        while($obj = $devuelve->fetchObject()){
            $usuario = new Usuario($obj->idUsuario, $obj->contraseña, $obj->nombre, $obj->rol);
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
            $usuario = new Usuario($obj->idUsuario, $obj->contraseña, $obj->nombre, $obj->rol);
            return $usuario;
        } else {
            return null;
        }
    }

    public static function valida($user, $pass) {
        $sql = "select * from usuarios where nombre = ? and contraseña = ?;";
        $passh = sha1($pass);
        $datos = array($user, $pass);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchObject();
        if($obj){
            $usuario = new Usuario($obj->idUsuario, $obj->contraseña, $obj->nombre, $obj->rol);
            return $usuario;
        } else {
            return null;
        }
    }

}

?>