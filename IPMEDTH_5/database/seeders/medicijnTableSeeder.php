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
            'dosis' => 50,
            ],
            [
            'naam' => 'Amixicilline',
            'dosis' => 500,
            ],
            [
            'naam' => 'Omeprazol',
            'dosis' => 10,
            ],
            [
            'naam' => 'Doxycycline',
            'dosis' => 100,
            ],
            [
            'naam' => 'Ibuprofen',
            'dosis' => 400,
            ],
            [
            'naam' => 'Metoprolol',
            'dosis' => 50,
            ],
            [
            'naam' => 'Salbutamol',
            'dosis' => 300,
            ]
        ));
    }
}
