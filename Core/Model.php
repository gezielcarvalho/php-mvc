<?php

namespace Core;

use PDO;
use PDOException;

/**
 * Base model
 *
 * PHP version 5.4
 */
abstract class Model
{

    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    protected static function getDB()
    {
        static $db = null;

        if ($db === null) {
            $host = getenv('DATABASE_HOST');
            $dbname = getenv('DATABASE_NAME');
            $username = getenv('DATABASE_USER');
            $password = getenv('DATABASE_PASSWORD');
    
            try {
                $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
                              $username, $password);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        return $db;
    }
}
