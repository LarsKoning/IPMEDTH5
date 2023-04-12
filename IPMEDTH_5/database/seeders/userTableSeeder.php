<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(array(
            [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            ],
            [
            'name' => 'Luca',
            'email' => 's1136861@student.hsleiden.nl',
            'password' => bcrypt('olasenor'),
            ],
            [
            'name' => 'Lars',
            'email' => 's1136408@student.hsleiden.nl',
            'password' => bcrypt('larsavel'),
            ],
            [
            'name' => 'Quinten',
            'email' => 's1133415@student.hsleiden.nl',
            'password' => bcrypt('quinsen'),
            ],
        ));
        DB::table('users')->insert(
            [
                'isPatient' => 1,
                'name' => 'sander',
                'email' => 's1122866@student.hsleiden.nl',
                'password' => bcrypt('smelly'),
                ]
            );
    }
}
