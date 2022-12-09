<?php

namespace App\Models;

use Core\Model;
use PDO;
use PDOException;

/**
 * Post model
 *
 * PHP version 5.4
 */
class User extends Model
{

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
  
        try {
            $db = static::getDB();

            $stmt = $db->query('SELECT id, name, username, surname FROM users');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            $results[] = $e->getMessage();
        } finally {
            return $results;
        }

    }
}
