<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class medicijnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicijnen')->insert(array(
            [
            'naam' => 'Diclofenac',
            'dosis (mg)' => 50,
            ],
            [
            'naam' => 'Amixicilline',
            'dosis (mg)' => 500,
            ],
            [
            'naam' => 'Omeprazol',
            'dosis (mg)' => 10,
            ],
            [
            'naam' => 'Doxycycline',
            'dosis (mg)' => 100,
            ],
            [
            'naam' => 'Ibuprofen',
            'dosis (mg)' => 400,
            ],
            [
            'naam' => 'Metoprolol',
            'dosis (mg)' => 50,
            ],
            [
            'naam' => 'Salbutamol',
            'dosis (mg)' => 300,
            ]
        ));
    }
}
