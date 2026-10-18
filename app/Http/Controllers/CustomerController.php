<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
            ],
            [
                'id' => 2,
                'full_name' => 'Maria Santos',
                'email' => 'maria@example.com',
            ],
            [
                'id' => 3,
                'full_name' => 'Carlo Reyes',
                'email' => 'carlo@example.com',
            ],
            [
                'id' => 4,
                'full_name' => 'Ana Garcia',
                'email' => 'ana@example.com',
            ],
            [
                'id' => 5,
                'full_name' => 'Mark Flores',
                'email' => 'mark@example.com',
            ],
        ];

        return view('customer', ['customers' => $customers]);
    }
}