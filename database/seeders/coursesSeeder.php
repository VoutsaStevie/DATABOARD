<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class coursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            ['coursetitle'=> 'Data Communication',
            'coursecode'=> 'ICT303',
            'courselevel'=> '3'],

            ['coursetitle'=> 'Software architecture',
            'coursecode'=> 'ICT301',
            'courselevel'=> '3'],
            ['coursetitle'=> 'Information system',
            'coursecode'=> 'ICT101',
            'courselevel'=> '1'],
        ]);
    }
}
