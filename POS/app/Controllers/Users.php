<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        // Static array data source
        $data['users'] = [
            ['username' => 'Admin', 'full_name' => 'Kaye Visera',      'role' => 'Administrator'],
            ['username' => 'Cashier', 'full_name' => 'Alexa Cruz',       'role' => 'Cashier'],
            ['username' => 'Cashier', 'full_name' => 'Joslier Gomez',    'role' => 'Cashier'],
            ['username' => 'Inventory','full_name' => 'AC Reyes',         'role' => 'Inventory Clerk'],
            ['username' => 'Manager', 'full_name' => 'Felix Visera',     'role' => 'Branch Manager'],
        ];

        return view('users/index', $data);
    }
}