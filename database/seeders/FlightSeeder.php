<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat data dummy
            $flights = [
              [
                // 'id'    => 1,
                'name'  => 'Domestik',
                'type'  => 0
              ],
              [
                // 'id'    => 2,
                'name'  => 'Bisnis',
                'type'  => 1
              ]  
            ];
        // Memanggil nama class Flight
        Flight::insert($flights);
    }
}
