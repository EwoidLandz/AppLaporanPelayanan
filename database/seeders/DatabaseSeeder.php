<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**s
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FlightSeeder::class, roleseeder::class, UserSeeder::class, ComplaintSeeder::class, OpinionSeeder::class
        ]);
    }
}
