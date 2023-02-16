<?php

class sensoresController extends ControladorPadre {

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

                $lista = sensoresDAO::findAll();
                $data = json_encode($lista);
                self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

            } else {
                if(isset($_GET["fecha"]) && count($_GET) == 2) {

                    $sensores = sensoresDAO::findByDate($_GET['fecha']);
                    $data = json_encode($sensores);
                    self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

                }
                // busqueda de fecha y hora: separarla usando un split, diviendo los datos en 2 arrays para los filtros.
            }
        } else if(count($recurso) == 3) {
            $sensores = sensoresDAO::findById($recurso[2]);
            $data = json_encode($sensores);
            self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
        }
    }

    public function insertar() {
        $body = $_GET;
        $obj = json_decode($body);

        if(isset($obj->humedad) && isset($obj->fecha) && isset($obj->temperatura) && isset($obj->personas) && isset($obj->luminosidad) && isset($obj->$idArduino)) {
            $sensores = new Sensores(null, $obj->fecha, $obj->humedad, $obj->temperatura, $obj->personas, $obj->luminosidad, $obj->$idArduino);
            if(sensoresDAO::insert($sensores)) {
                self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
            }
        } else {
            self::respuesta('', array('JSON no tiene un formato correcto'));
        }

    }
}
