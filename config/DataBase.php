<?php

/**
 * Created by PhpStorm.
 * User: Grindevalt
 * Date: 04.05.2017
 * Time: 16:14
 */
class DataBase
{
    private $host = "localhost";
    private $username = "root";
    private $pass = "";
    private $dbName = "test_base";

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @return string
     */
    public function getDbName()
    {
        return $this->dbName;
    }
}