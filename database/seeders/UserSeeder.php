<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'      => 'Andrew',
                'email'     =>  'andrewasidonorman@gmail.com',
                'password'  => bcrypt(225),
                'roles_id'   =>1 // id dari table roles  
            ],
            [
                'name'      => 'Yosua',
                'email'     =>  'yosua@gmail.com',
                'password'  => bcrypt(500),
                'roles_id'   =>2 // id dari table roles  
            ],
            [
                'name'      => 'TeckHeng',
                'email'     =>  'jordan@gmail.com',
                'password'  => bcrypt(555),
                'roles_id'   =>2 // id dari table roles
            ],
            [
                'name'      => 'Susanto',
                'email'     => 'santogaming@gmail.com',
                'password'  => bcrypt(666),
                'roles_id'   =>2 // id dari table roles
            ]
            ];

            User::insert($users);
    }
}
