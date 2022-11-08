<?php

namespace Database\Seeders;

use App\Models\Opinion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpinionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $opinions = [
            [
                'tanggapan'     => 'Memanggil Ambulans dan Memberikan pertolongan pertama',
                'complaint_id'  => 1,
                'user_id'       => 1  
            ],
            [
                'tanggapan'     => 'Tidak bisa menjaga anak',
                'complaint_id'  => 1,
                'user_id'       => 1
            ]
            ];
            Opinion::insert($opinions);
    }
}
