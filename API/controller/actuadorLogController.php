<?php

class actuadorLogController extends ControladorPadre {
    // funcion de controlar, que recibe el metodo y llama a la respectiva funcion en el switch.
    public function controlar()
    {
        $metodo = $_SERVER['REQUEST_METHOD'];
        switch ($metodo) {
            // si es get llama a la funcion buscar.
            case 'GET':
                $this->buscar();
                break;
            // si es post llama a la funcion insertar, solo lo hara el arduino.
            case 'POST':
                $this->insertar();
                break;
            // si no se indica recurso, manda un error 404.
            default:
                ControladorPadre::respuesta('', array('HTTP/1.1 404 No se indica recurso'));
        }
    }

    public function buscar() {
        // recojo los parametros de la url, si tiene parametros.
        $parametros = $this->parametros();
        // recojo los recursos de la url en un array.
        $recurso = self::recurso();

        // compruebo que el recurso tiene 2 valores, que serian en este caso "" y "actuadores".
        if(count($recurso) == 2) {
            // compruebo que parametros no este vacio, si lo esta entrara a recoger todos.
            if(!$parametros) {

                // aqui recojo todos los sensores con todos sus valores, los paso a un json y los envio.
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
        }
    }

    public function insertar() {
        // recojo los datos que me envia el arduino mediante un json.
        $body = file_get_contents('php://input');
        $obj = json_decode($body);
        // le pongo al objeto la clave fecha y el valor la fecha del dia de hoy con su respectiva hora.
        $obj->fecha = date('Y-m-d H:i:s');

        // compruebo que los valores no estan vacios y creo un objeto de ActuadorLog con ellos.
        if(isset($obj->actuador) && isset($obj->fecha) && isset($obj->causa) && isset($obj->idArduino)) {
            $actuador = new actuadorLog(null, $obj->fecha, $obj->actuador, $obj->causa, $obj->idArduino);
            // procedo a intentar insertar los valores en la BD, si todo ha salido con exito devuelvo un codigo 200 y si sale mal devuelvo la razon del error.
            if(actuadorLogDAO::insert($actuador)) {
                self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
            }
        } else {
            self::respuesta('', array('JSON no tiene un formato correcto'));
        }

    }
}