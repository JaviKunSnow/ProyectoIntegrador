<?php

class arduinoController extends ControladorPadre {
    // funcion de controlar, que recibe el metodo y llama a la respectiva funcion en el switch.
    public function controlar()
    {
        $metodo = $_SERVER['REQUEST_METHOD'];
        switch ($metodo) {
            case 'GET':
                // si es get llama a la funcion buscar.
                $this->buscar();
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
            // compruebo que parametros no este vacio, si lo esta entrara a recoger todos.
            if(!$parametros) {

                // aqui recojo todos los sensores con todos sus valores, los paso a un json y los envio.
                $lista = sensoresDAO::findAll();
                $data = json_encode($lista);
                self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

            } else {

                if(isset($_GET["clase"]) && count($_GET) == 1) {

                    // llamo al dao de datosSensor para buscar los datos del sensor entre 2 fechas y recojo los datos.
                    $arduino = arduinoDAO::findByClass($_GET["clase"]);
                    $data = json_encode($arduino);
                    self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

                // aqui pregunto si la cuenta de valores del get es 3 y si no estan vacios los datos que recojemos.
                
                }
            }
        }
    }
}