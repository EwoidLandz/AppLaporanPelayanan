<?php

namespace Database\Seeders;

use App\Models\Complaint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $complaint = [
            [
                'nik'           => 'NIK252525',
                'text_complaint' => 'Kepala Bapak Pecah',
                'location'      => 'Batu Aji',
                'image'         => null,
                'status'        => 0,
                'user_id'       => 3,
                'roles_id'       => 3
            ],
            [
                'nik'           => 'NIK7775',
                'text_complaint' => 'Anak Orang Jatuh',
                'location'      => 'Nagoya',
                'image'         => null,
                'status'        => 0,
                'user_id'       => 4,
                'roles_id'       => 3
            ]
        ];
        Complaint::insert($complaint);
    }
}
