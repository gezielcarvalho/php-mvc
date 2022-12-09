<?php

namespace App\Models;

use PDO;
use PDOException;

/**
 * Post model
 *
 * PHP version 5.4
 */
class User
{

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
   
        $host = 'mydb';
        $port = '3306';
        $dbname = 'five';
        $username = 'root';
        $password = 'A_1234567';
    
        try {
            $db = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
                          $username, $password);

            $stmt = $db->query('SELECT id, name, username, surname FROM users');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            $results[] = $e->getMessage();
        } finally {
            return $results;
        }

    }
}
