<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        // Static array data source
        $data['customers'] = [
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@gmail.com', 'phone' => '09123456789'],
            ['full_name' => 'Maria Santos',    'email' => 'maria.santos@yahoo.com',    'phone' => '09234567890'],
            ['full_name' => 'Carlos Reyes',    'email' => 'carlos.reyes@outlook.com',  'phone' => '09345678901'],
            ['full_name' => 'Ana Mendoza',     'email' => 'ana.mendoza@gmail.com',     'phone' => '09456789012'],
            ['full_name' => 'Jose Rizal',      'email' => 'jose.rizal@deped.gov.ph',   'phone' => '09567890123'],
        ];

        return view('customers/index', $data);
    }
}