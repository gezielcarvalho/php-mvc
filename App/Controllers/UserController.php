<?php

namespace App\Controllers;
use Core\View;

class UserController {
    
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
        View::render('Users/index.php', compact(['data','sidebar', 'toolbar', 'breadcrumbs']));
    }
}