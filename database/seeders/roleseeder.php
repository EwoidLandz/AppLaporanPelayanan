<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name'  => 'Admin'
            ],
            [
                'name'  => 'Petugas'
            ],
            [
                'name'  => 'Masyarakat'
            ]
            ];

            Roles::insert($roles);
    }
}
