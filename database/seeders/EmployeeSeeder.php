<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Frederick',
                'lastname' => 'Maulana',
                'email' => 'frederick.maulana@gmail.com',
                'age' => 20,
                'position_id' => 1
            ],
            [
                'firstname' => 'Irine',
                'lastname' => 'Oktaviany',
                'email' => 'irine.oktaviany@gmail.com',
                'age' => 21,
                'position_id' => 2
            ],
            [
                'firstname' => 'Bambang',
                'lastname' => 'Gentolet',
                'email' => 'bambang.gentolet@gmail.com',
                'age' => 23,
                'position_id' => 3
            ],
        ]);
    }
}
