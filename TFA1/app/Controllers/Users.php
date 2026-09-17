<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'Paul John', 'role' => 'Admin'],
            ['id' => 2, 'username' => 'John Doe', 'role' => 'Staff'],
            ['id' => 3, 'username' => 'Horsey', 'role' => 'Staff'],
            ['id' => 4, 'username' => 'John Paul', 'role' => 'Member'],
            ['id' => 5, 'username' => 'Bingo Plus', 'role' => 'Member'],
        ];

        return view('users', ['users' => $users]);
    }
}