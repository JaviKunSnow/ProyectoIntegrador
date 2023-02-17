<?php

class sensoresController extends ControladorPadre {
    // funcion de controlar, que recibe el metodo y llama a la respectiva funcion en el switch
    public function controlar()
    {
        $metodo = $_SERVER['REQUEST_METHOD'];
        switch ($metodo) {
            case 'GET':
                // si es get llama a la funcion buscar.
                $this->buscar();
                break;
            case 'POST':
                // si es post llama a la funcion insertar, solo lo hara el arduino.
                $this->insertar();
                break;
            default:
            // si no se indica recurso, manda un error 404.
                ControladorPadre::respuesta('', array('HTTP/1.1 404 No se indica recurso'));
        }
    }

    public function buscar() {
        // recojo los parametros de la url, si tiene parametros.
        $parametros = $this->parametros();
        // recojo los recursos de la url en un array.
        $recurso = self::recurso();

        // compruebo que el recurso tiene 2 valores, que serian en este caso "" y "sensores".
        if(count($recurso) == 2) {
            // compruebo que parametros no este vacio, si lo esta entrara a recoger todos
            if(!$parametros) {

                $lista = sensoresDAO::findAll();
                $data = json_encode($lista);
                self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

            } else {
                if(isset($_GET["datos"]) && isset($_GET["fecha1"]) && isset($_GET["fecha2"]) && count($_GET) == 3) {

                    $sensores = sensoresDAO::findDatosSensor($_GET["datos"], $_GET["fecha1"], $_GET["fecha2"]);
                    $data = json_encode($sensores);
                    self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

                } else if(isset($_GET["datos"]) && isset($_GET["id"]) && isset($_GET["fecha1"]) && isset($_GET["fecha2"]) && count($_GET) == 4) {

                    $sensores = sensoresDAO::findDatosSensor($_GET["datos"], $_GET["id"], $_GET["fecha1"], $_GET["fecha2"]);
                    $data = json_encode($sensores);
                    self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

                } else if(isset($_GET["clase"]) && count($_GET) == 1) {

                    $sensores = sensoresDAO::findByIdArduino($_GET['clase']);
                    $data = json_encode($sensores);
                    self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

                } else {
                    self::respuesta('',array('HTTP/1.1 404 No se ha utilizado el filtro correcto'));
                }
                // busqueda de fecha y hora: separarla usando un split, diviendo los datos en 2 arrays para los filtros.
            }
        }
    }

    public function insertar() {
        $body = file_get_contents('php://input');
        $obj = json_decode($body);
        $obj->fecha = date('Y-m-d H:i:s');

        if(isset($obj->humedad) && isset($obj->fecha) && isset($obj->temperatura) && isset($obj->personas) && isset($obj->luminosidad) && isset($obj->idArduino)) {
            $sensores = new sensores(null, $obj->fecha, $obj->humedad, $obj->temperatura, $obj->personas, $obj->luminosidad, $obj->idArduino);
            if(sensoresDAO::insert($sensores)) {
                self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
            }
        } else {
            self::respuesta('', array('JSON no tiene un formato correcto'));
        }

    }
}
