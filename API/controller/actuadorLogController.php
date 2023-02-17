<?php

class actuadorLogController extends ControladorPadre {

    public function controlar()
    {
        $metodo = $_SERVER['REQUEST_METHOD'];
        switch ($metodo) {
            case 'GET':
                $this->buscar();
                break;
            case 'POST':
                $this->insertar();
                break;
            default:
                ControladorPadre::respuesta('', array('HTTP/1.1 404 No se indica recurso'));
        }
    }

    public function buscar() {
        $parametros = $this->parametros();
        $recurso = self::recurso();

        if(count($recurso) == 2) {
            if(!$parametros) {

                $lista = actuadorLogDAO::findAll();
                $data = json_encode($lista);
                self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

            } else {
                
                if(isset($_GET["fecha"]) && count($_GET) == 2) {

                    $sensores = actuadorLogDAO::findByDate($_GET['fecha']);
                    $data = json_encode($sensores);
                    self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

                }

            }
        } else if(count($recurso) == 3) {
            $actuador = actuadorLogDAO::findById($recurso[2]);
            $data = json_encode($actuador);
            self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
        }
    }

    public function insertar() {
        
        $body = file_get_contents('php://input');
        $obj = json_decode($body);
        $obj->fecha = date('Y-m-d H:i:s');

        if(isset($obj->actuador) && isset($obj->fecha) && isset($obj->causa) && isset($obj->idArduino)) {
            $actuador = new actuadorLog(null, $obj->fecha, $obj->actuador, $obj->causa, $obj->idArduino);
            if(actuadorLogDAO::insert($actuador)) {
                self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
            }
        } else {
            self::respuesta('', array('JSON no tiene un formato correcto'));
        }

    }
}