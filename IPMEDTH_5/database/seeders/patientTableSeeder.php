<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class patientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patient')->insert(array(
            [
            'voornaam' => 'jan',
            'achternaam' => 'van der loop',
            'adres' => 'Marco Pololaan 464',
            ],
            [
            'voornaam' => 'Adriaan',
            'achternaam' => 'monnik',
            'password' => 'Kruisweg 55',
            ],
            [
            'voornaam' => 'Anne',
            'achternaam' => 'de Zwaan',
            'password' => 'Kerkplein 6',
            ],
            [
            'voornaam' => 'Mandy',
            'achternaam' => 'Fansen',
            'password' => 'Mercuriuslaan 16',
            ],
            [
            'voornaam' => 'Kimberly',
            'achternaam' => 'Corn',
            'password' => 'Sikkelstraat 117',
            ]
        ));
    }
}
