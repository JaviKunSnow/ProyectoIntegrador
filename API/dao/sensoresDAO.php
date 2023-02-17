<?

class sensoresDAO extends FactoryBD implements DAO {
    
    public static function findAll() {
        $sql = "select * from sensores;";
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findById($id) {
        $sql = "select * from sensores where idSensor = ? ;";
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetch(PDO::FETCH_ASSOC);
        if($obj){
            return $obj;
        } else {
            return null;
        }
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

    public static function findByDate($date) {
        $sql = "select * from sensores where fecha like ?;";
        $datos = array($date);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findBetweenDate($date1, $date2) {
        $sql = "select * from sensores where fecha between ? and ?;";
        $datos = array($date1, $date2);
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