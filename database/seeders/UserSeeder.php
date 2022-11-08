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
                'email'     => 'andrew@gmail.com',
                'roles_id'   =>1, // id dari table roles  
                'password'  => bcrypt(225),
            ],
            [
                'name'      => 'Yosua',
                'email'     =>  'yosua@gmail.com',
                'roles_id'   =>3, // id dari table roles  
                'password'  => bcrypt(500),
            ],
            [
                'name'      => 'TeckHeng',
                'email'     =>  'jordan@gmail.com',
                'roles_id'   =>2, // id dari table roles
                'password'  => bcrypt(555)
            ],
            [
                'name'      => 'Susanto',
                'email'     => 'santogaming@gmail.com',
                'roles_id'   =>3, // id dari table roles
                'password'  => bcrypt(666)
            ]
            ];

            User::insert($users);
    }
}
