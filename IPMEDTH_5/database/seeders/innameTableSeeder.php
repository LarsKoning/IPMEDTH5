<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class innameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inname')->insert(array(
            [
                'patientID'=>'1',
                'medicijnID'=>'6',
                'whichDay'=>'woe',
                'timeOpen'=>'12.30',
            ],
            [
                'patientID'=>'2',
                'medicijnID'=>'3',
                'whichDay'=>'din',
                'timeOpen'=>'15.30',
            ],
            [
                'patientID'=>'3',
                'medicijnID'=>'1',
                'whichDay'=>'vrij',
                'timeOpen'=>'13.00',
            ],
            [
                'patientID'=>'4',
                'medicijnID'=>'4',
                'whichDay'=>'woe',
                'timeOpen'=>'19.30',
            ],
            [
                'patientID'=>'5',
                'medicijnID'=>'2',
                'whichDay'=>'don',
                'timeOpen'=>'14.00',
            ],
            [
                'patientID'=>'3',
                'medicijnID'=>'7',
                'whichDay'=>'zat',
                'timeOpen'=>'10.00',
            ],
            [
                'patientID'=>'5',
                'medicijnID'=>'1',
                'whichDay'=>'zon',
                'timeOpen'=>'15.30',
            ]
        ));
    }
}
