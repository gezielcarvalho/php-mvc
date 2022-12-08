<?php

namespace App\Controllers;

use Core\View;
use SQLite3;

class UserController
{

    protected $db;
    public function __construct()
    {
        $this->db = new SQLite3('mvc.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
        // Errors are emitted as warnings by default, enable proper error handling.
        $this->db->enableExceptions(true);
        // Create a table.

        $this->db->query('CREATE TABLE IF NOT EXISTS "visits" (
            "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
            "user_id" INTEGER,
            "url" VARCHAR,
            "time" DATETIME
        )');

        // Insert some sample data.
        //
        // INSERTs may seem very slow in SQLite, which happens when not using transactions.
        // It's advisable to wrap related queries in a transaction (BEGIN and COMMIT),
        // even if you don't care about atomicity.
        // If you don't do this, SQLite automatically wraps every single query
        // in a transaction, which slows everything down immensely.

        $this->db->exec('BEGIN');
        $this->db->query('INSERT INTO "visits" ("user_id", "url", "time")
    VALUES (43, "/test", "2017-01-14 10:11:23")');
        $this->db->query('INSERT INTO "visits" ("user_id", "url", "time")
    VALUES (43, "/test2", "2017-01-14 10:11:44")');
        $this->db->exec('COMMIT');
    }
    public function index()
    {
        $data = [
            'name' => 'Geziel Carvalho',
            'skills' => ['PHP', 'Laravel', 'VueJS']
        ];
        $sidebar = [
            'menu' => [
                'sections' => [
                    [
                        'name' => 'NAVIGATION',
                        'items' => [
                            [
                                'icon' => 'uil-home-alt',
                                'title' => 'Dashboards',
                                'href' => '/'
                            ],
                            [
                                'icon' => 'uil-users-alt',
                                'title' => 'User Management',
                                'href' => '/users'
                            ],
                        ]
                    ]
                ]
            ]
        ];
        $toolbar = [
            'search' => [
                'display' => 'block'
            ]
        ];
        $breadcrumbs = [
            [
                'title' => 'Home',
                'href' => '/'
            ],
            [
                'title' => 'Navigation',
                'href' => '/'
            ],
            [
                'title' => 'User Management',
                'href' => 'active'
            ],
        ];
        View::render('Users/index.php', compact(['data', 'sidebar', 'toolbar', 'breadcrumbs']));
    }

    public function indexJson()
    {
        // Fetch today's visits of user #42.
        // We'll use a prepared statement again, but with numbered parameters this time:

        $statement = $this->db->prepare('SELECT * FROM "visits"');
        // $statement = $this->db->prepare('SELECT * FROM "visits" WHERE "user_id" = ? AND "time" >= ?');
        // $statement->bindValue(1, 42);
        // $statement->bindValue(2, '2017-01-14');
        // Fetch Associated Array (1 for SQLITE3_ASSOC)
        $results = $statement->execute();
        $data = [];
        while ($res = $results->fetchArray(1)) {
            //insert row into array
            array_push($data, $res);
        }

        echo json_encode(['result' => $data]);
        // free the memory, this in NOT done automatically, while your script is running
        $results->finalize();
    }
}
