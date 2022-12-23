<?php 

abstract class Model{
    private static $pdo;
    private static function setBdd(){
        self::$pdo = new PDO ("");
    }
}

?>