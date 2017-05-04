<?php
require_once "config/DataBase.php";
class ConnectionUtil{
    public $db = false;

    function connectDB(){
        $dataBase = new DataBase();
        $db = new mysqli($dataBase->getHost(),$dataBase->getUsername(),$dataBase->getPass(), $dataBase->getDbName());
        $db->query("SET NAMES 'utf-8'");
    }
    function closeDB(){
        global $db;
        $db->close();
    }
}
