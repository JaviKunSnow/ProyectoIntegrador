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
        $sql = "select * from sensores where idSensor= ? ;";
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetch(PDO::FETCH_ASSOC);
        if($obj){
            return $obj;
        } else {
            return null;
        }
    }

    public static function findByDate($date) {
        $sql = "select * from sensores where fecha = ?;";
        $datos = array($date);
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    // 
}


?>