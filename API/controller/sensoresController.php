<?php

class sensoresController extends ControladorPadre {
    // funcion de controlar, que recibe el metodo y llama a la respectiva funcion en el switch.
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
            // compruebo que parametros no este vacio, si lo esta entrara a recoger todos.
            if(!$parametros) {

                // aqui recojo todos los sensores con todos sus valores, los paso a un json y los envio.
                $lista = sensoresDAO::findAll();
                $data = json_encode($lista);
                self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

            } else {
                // aqui pregunto si la cuenta de valores del get es 3 y si no estan vacios los datos que recojemos.
                if(isset($_GET["datos"]) && isset($_GET["fecha1"]) && isset($_GET["fecha2"]) && count($_GET) == 3) {

                    // llamo al dao de datosSensor para buscar los datos del sensor entre 2 fechas y recojo los datos.
                    $sensores = sensoresDAO::findDatosSensor($_GET["datos"], $_GET["fecha1"], $_GET["fecha2"]);
                    $data = json_encode($sensores);
                    self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

                // aqui pregunto si la cuenta de valores del get es 4 y si no estan vacios los datos que recojemos.
                } else if(isset($_GET["datos"]) && isset($_GET["id"]) && isset($_GET["fecha1"]) && isset($_GET["fecha2"]) && count($_GET) == 4) {

                    // llamo al dao de datosSensor para buscar los datos del sensor entre 2 fechas y por la id del arduino y recojo los datos.
                    $sensores = sensoresDAO::findDatosSensorbyIdArduino($_GET["datos"], $_GET["id"], $_GET["fecha1"], $_GET["fecha2"]);
                    $data = json_encode($sensores);
                    self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

                // recojo los datos de la clase, que sera la id del arduino.
                } else if(isset($_GET["clase"]) && count($_GET) == 1) {

                    // recojo y envio los datos de la clase correspondiente por la id que le hemos pasado.
                    $sensores = sensoresDAO::findByIdArduino($_GET['clase']);
                    $data = json_encode($sensores);
                    self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));

                } else {
                    self::respuesta('',array('HTTP/1.1 404 No se ha utilizado el filtro correcto'));
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

        // compruebo que los valores no estan vacios y creo un objeto de Sensores con ellos.
        if(isset($obj->humedad) && isset($obj->fecha) && isset($obj->temperatura) && isset($obj->personas) && isset($obj->luminosidad) && isset($obj->idArduino)) {
            $sensores = new sensores(null, $obj->fecha, $obj->humedad, $obj->temperatura, $obj->personas, $obj->luminosidad, $obj->idArduino);
            // procedo a intentar insertar los valores en la BD, si todo ha salido con exito devuelvo un codigo 200 y si sale mal devuelvo la razon del error.
            if(sensoresDAO::insert($sensores)) {
                self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
            }
        } else {
            self::respuesta('', array('JSON no tiene un formato correcto'));
        }

    }
}
