<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        $this->call([
            patientTableSeeder::class,
            medicijnTableSeeder::class,
            innameTableSeeder::class,
            userTableSeeder::class,
        ]);
    }
}
