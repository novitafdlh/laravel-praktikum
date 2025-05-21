<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Novita Fadilah Datuamas',
                'student_id_number' => 'F55123002',
                'email' => 'nvt13251920@gmail.com',
                'phone_number' => '082296751614',
                'birth_date' => '2005-07-25',
                'gender' => 'Female',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Rizka Filardi Toliz',
                'student_id_number' => 'F55123034',
                'email' => 'rfilarditz@gmail.com',
                'phone_number' => '085135794810',
                'birth_date' => '2005-06-27',
                'gender' => 'Female',
                'status' => 'active',
                'major_id' => 2,
            ],
        ]);
    }
}

