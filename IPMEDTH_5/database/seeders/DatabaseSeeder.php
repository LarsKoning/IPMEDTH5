<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert(array(
            [
            'name' => 'sander',
            'email' => 's1122866@student.hsleiden.nl',
            'password' => Hash::make('password'),
            ],
            [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            ],
            [
            'name' => 'Luca',
            'email' => 's1136861@student.hsleiden.nl',
            'password' => Hash::make('password'),
            ],
            [
            'name' => 'Lars',
            'email' => 's1136408@student.hsleiden.nl',
            'password' => Hash::make('password'),
            ],
            [
            'name' => 'Quinten',
            'email' => 's1133415@student.hsleiden.nl',
            'password' => Hash::make('password'),
            ],
        ));

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
