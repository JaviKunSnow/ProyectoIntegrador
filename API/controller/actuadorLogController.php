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
                


            }
        } else if(count($recurso) == 3) {
            $actuador = actuadorLogDAO::findById($recurso[2]);
            $data = json_encode($actuador);
            self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
        }
    }

    public function insertar() {
        

    }
}