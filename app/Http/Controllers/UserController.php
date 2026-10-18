<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'full_name' => 'Luis Mendoza',
                'email' => 'luis@example.com',
                'role' => 'Admin',
            ],
            [
                'id' => 2,
                'full_name' => 'Sofia Ramos',
                'email' => 'sofia@example.com',
                'role' => 'Staff',
            ],
            [
                'id' => 3,
                'full_name' => 'Miguel Torres',
                'email' => 'miguel@example.com',
                'role' => 'Staff',
            ],
            [
                'id' => 4,
                'full_name' => 'Bea Cruz',
                'email' => 'bea@example.com',
                'role' => 'Staff',
            ],
            [
                'id' => 5,
                'full_name' => 'Paolo Reyes',
                'email' => 'paolo@example.com',
                'role' => 'Staff',
            ],
        ];

        return view('user', ['users' => $users]);
    }
}