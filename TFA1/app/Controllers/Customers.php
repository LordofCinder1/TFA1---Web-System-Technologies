<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Freddy Fazbear', 'email' => 'freddyfazbear@example.com'],
            ['id' => 2, 'name' => 'Mickey Mouse', 'email' => 'mickeymouse@example.com'],
            ['id' => 3, 'name' => 'Charlie Kirk', 'email' => 'charliekirk@example.com'],
            ['id' => 4, 'name' => 'Dinorobong Tubo', 'email' => 'dinorobongtubo@example.com'],
            ['id' => 5, 'name' => 'Kween Yasmin', 'email' => 'kweenyasmin@example.com'],
        ];

        return view('customers', ['customers' => $customers]);
    }
}