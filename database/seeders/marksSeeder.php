<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class marksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('marks')->insert([
            ['studentmatricule'=> '21T2654',
            'coursecode'=> 'ICT303',
            'camark'=> '20',
            'snmark'=> '20',
            'tpmark'=> '30',
            'year'=> '2023',
            'semester'=> '1',
            'total'=> '70'],

            ['studentmatricule'=> '21S2654',
            'coursecode'=> 'ICT303',
            'camark'=> '20',
            'snmark'=> '20',
            'tpmark'=> '30',
            'year'=> '2023',
            'semester'=> '1',
            'total'=> '70'],

            ['studentmatricule'=> '21T2654',
            'coursecode'=> 'ICT301',
            'camark'=> '20',
            'snmark'=> '40',
            'tpmark'=> '25',
            'year'=> '2023',
            'semester'=> '1',
            'total'=> '85'],
        ]);
    }
}
