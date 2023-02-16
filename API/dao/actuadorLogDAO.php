<?

class actuadorLogDAO extends FactoryBD implements DAO {
    
    public static function findAll() {
        $sql = "select * from actuador_log;";
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensores = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arraySensores;
    }

    public static function findById($id) {
        $sql = "select * from actuador_log where idActuador = ?;";
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
        $sql = "select * from actuador_log where fecha = ?;";
        $datos = array($date);
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
    
    public static function update($obj) {
        $sql = "update actuador_log set grupo = ?, fecha = ?, precio = ?, lugar = ? where id = ?;";
        $datos = array($obj->fecha, $obj->actuador, $obj->causa, $obj->idArduino, $obj->idActuador);
        $devuelve = parent::ejecuta($sql,$datos);
        if($devuelve->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }
    
    public static function delete($id) {
        $sql = "delete from actuador_log where id = ?;";
        $datos = array($id);
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