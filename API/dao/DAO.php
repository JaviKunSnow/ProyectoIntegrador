<?php

interface DAO {

    public static function findAll();
    public static function findById($id);
    public static function insert($objeto);

}

?>