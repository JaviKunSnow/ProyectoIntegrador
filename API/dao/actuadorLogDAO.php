<?

class actuadorLogDAO extends FactoryBD implements DAO {
    
    public static function findAll() {
        $sql = "select * from actuador_log;";
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findByIdArduino($id) {
        $sql = "select * from actuador_log where idArduino = ? ;";
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        if($obj){
            return $obj;
        } else {
            return null;
        }
    }

    public static function findDatos($dato) {
        $sql = "select * from actuador_log where actuador = ?;";
        $datos = array($dato);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findDatosById($dato, $id) {
        $sql = "select * from actuador_log where idArduino = ? and actuador = ?;";
        $datos = array($id, $dato);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findDatosBetweenDate($date1, $date2) {
        $sql = "select * from actuador_log where fecha between ? and ?;";
        $datos = array($date1, $date2);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findDatosActuador($dato, $date1, $date2) {
        $sql = "select * from actuador_log where actuador = ? and fecha between ? and ?;";
        $datos = array($dato, $date1, $date2);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findDatosActuadorById($id, $date1, $date2) {
        $sql = "select * from actuador_log where idArduino = ? and fecha between ? and ?;";
        $datos = array($id, $date1, $date2);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findDatosActuadorbyIdAndDate($dato, $id, $date1, $date2) {
        $sql = "select * from actuador_log where actuador = ? and idArduino = ? and fecha between ? and ?;";
        $datos = array($dato, $id, $date1, $date2);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function insert($objeto) {
        $sql = "insert into actuador_log values (?,?,?,?,?)";
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