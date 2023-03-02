<?

class sensoresDAO extends FactoryBD implements DAO {
    
    public static function findAll() {
        $sql = "select * from sensores;";
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findByIdArduino($id) {
        $sql = "select * from sensores where idArduino = ? ;";
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        if($obj){
            return $obj;
        } else {
            return null;
        }
    }

    public static function findDatosByLastDate($id) {
        $sql = "select * from sensores where idArduino = ? order by fecha desc limit 1;";
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findDatos($dato) {
        $sql = "select idSensor, fecha, ".$dato.", idArduino from sensores;";
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findDatosBetweenDate($date1, $date2) {
        $sql = "select * from sensores where fecha between ? and ?;";
        $datos = array($date1, $date2);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findDatosById($dato, $id) {
        $sql = "select idSensor, fecha, ".$dato.", idArduino from sensores where idArduino = ?;";
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findDatosSensor($dato, $date1, $date2) {
        $sql = "select idSensor, fecha, ".$dato.", idArduino from sensores where fecha between ? and ?;";
        $datos = array($date1, $date2);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findDatosSensorById($id, $date1, $date2) {
        $sql = "select * from sensores where idArduino = ? and fecha between ? and ?;";
        $datos = array($id, $date1, $date2);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findDatosSensorbyIdAndDate($dato, $id, $date1, $date2) {
        $sql = "select idSensor, fecha, ".$dato.", idArduino from sensores where idArduino = ? and fecha between ? and ?;";
        $datos = array($id, $date1, $date2);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findDatosByLastWeek() {
        $sql = "SELECT DATE(fecha) AS fecha, AVG(humedad) AS humedad_media, AVG(temperatura) AS temperatura_media, AVG(luminosidad) AS luminosidad_media, AVG(personas) AS personas_media FROM sensores WHERE fecha >= DATE_SUB(NOW(), INTERVAL 2 WEEK) GROUP BY DATE(fecha)";
        $datos = [];
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        $datosSemana = array();
        foreach($arraySensores as $fila) {
            $fecha_medicion = new DateTime($fila['fecha']);
            $numero_semana_medicion = $fecha_medicion->format('W');
            $fecha_actual = new DateTime();
            $numero_semana_actual = $fecha_actual->format('W');
            $diferencia_semanas = $numero_semana_actual - $numero_semana_medicion;
            if ($diferencia_semanas == 1 || ($diferencia_semanas == 0 && $fecha_medicion->format('N') > $fecha_actual->format('N'))) {
                $objeto = new stdClass();
                $objeto->fecha = $fila['fecha'];
                $objeto->humedad_media = $fila['humedad_media'];
                $objeto->temperatura_media = $fila['temperatura_media'];
                $objeto->luminosidad_media = $fila['luminosidad_media'];
                $objeto->personas_media = $fila['personas_media'];
                $datosSemana[] = $objeto;
            }
        }

        return $datosSemana;
    }

    public static function findDatosByLastMonth() {
        //$sql = "SELECT WEEK(fecha) AS semana, AVG(humedad) AS humedad_media, AVG(temperatura) AS temperatura_media, AVG(luminosidad) AS luminosidad_media, AVG(personas) AS personas_media FROM sensores WHERE fecha >= DATE_SUB(NOW(), INTERVAL 2 MONTH) GROUP BY WEEK(fecha)";
        $sql = "SELECT WEEK(fecha) AS semana, AVG(humedad) AS media_humedad, AVG(temperatura) AS media_temperatura, AVG(luminosidad) AS media_luminosidad, AVG(personas) AS media_personas FROM sensores WHERE fecha >= DATE_ADD(LAST_DAY(DATE_SUB(NOW(), INTERVAL 2 MONTH)), INTERVAL 1 DAY) AND fecha < DATE_ADD(LAST_DAY(NOW()), INTERVAL 1 DAY) AND MONTH(fecha) <> MONTH(NOW()) GROUP BY WEEK(fecha)";
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function insert($objeto) {
        $sql = "insert into sensores values (?,?,?,?,?,?,?)";
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
    // fecha, aulas, sensores, actuadores
}


?>