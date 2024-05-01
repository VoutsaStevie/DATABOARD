<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class specialitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specialities')->insert([
            ['id' => '1',
            'speciality'=> 'réseau'],
            ['id' => '2',
            'speciality'=> 'sécurité'],
            ['id' => '3',
            'speciality'=> 'genie logiciel'],
        ]);
    }
}
