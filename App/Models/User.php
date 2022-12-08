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
   
        $results = [];

        try {
            $db = new PDO("sqlite:mvc.sqlite");
            $stmt = $db->query('SELECT id, title, content FROM posts
                                ORDER BY created_at');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        } finally {
            return $results;
        }
    }
}
