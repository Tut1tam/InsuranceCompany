<?php

namespace App\components;
use PDO;
class Db
{
    public static function getConnection()
    {
        // Get the connection parameters from the file
        $paramsPath = ROOT . '/app/config/db_params.php';
        $params = include($paramsPath);
        
        // Establish a connection
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']};port=3306";
        $db = new PDO($dsn, $params['user'], $params['password']);
        
        // Set the charset
        $db->exec("set names utf8");
        
        // Show PDO errors
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $db;
    }
}

