<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class HomeController extends Controller
{
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
                'display' => 'none'
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
                'title' => 'Dashboard',
                'href' => 'active'
            ],
        ];
        View::render('Home/index.php', compact(['data', 'sidebar', 'toolbar', 'breadcrumbs']));
    }
}