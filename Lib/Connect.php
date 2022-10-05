<?php

error_reporting(0);
/**
 * Defines the database connection using the 
**/
class Connect
{
    private $connect = null;

    public function __construct()
    {
        $host = "localhost";
        $db = "short_url";
        $user = "root";
        $pass = "";

        try {
            $this->connect = new \PDO("mysql:host=$host;dbname=$db", $user, $pass);
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->connect;
    }

}