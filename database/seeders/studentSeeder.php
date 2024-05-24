<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student')->insert([
            ['full_name'=> 'vouts',
            'speciality'=> 'genie logiciel',
            'matricule'=> '21T2654',
            'sex'=>'f',
            'email'=> 'machevoutsa@gmail.com',
            'level'=> '3',
            'birthdate'=> '2004-01-20',
            'numero'=>'+237656551166',
            'filiere'=> 'ICT4D'],

            ['full_name'=> 'sibelle',
            'speciality'=> 'genie logiciel',
            'matricule'=> '21S2654',
            'sex'=>'f',
            'email'=> 'deisibelle@gmail.com',
            'level'=> '3',
            'birthdate'=> '2002-02-22',
            'numero'=>'+237673219684',
            'filiere'=> 'ICT4D'],

            ['full_name'=> 'Sophia',
            'speciality'=> 'genie logiciel',
            'matricule'=> '21R2654',
            'sex'=>'f',
            'email'=> 'mbasophia@gmail.com',
            'level'=> '2',
            'birthdate'=> '2005-01-20',
            'numero'=>'+237672791963',
            'filiere'=> 'ICT4D'],

            ['full_name'=> 'AD',
            'speciality'=> 'sécurité',
            'matricule'=> '21Q2654',
            'sex'=>'m',
            'email'=> 'akofenadigital@gmail.com',
            'level'=> '3',
            'birthdate'=> '2004-01-20',
            'numero'=>'+237659393756',
            'filiere'=> 'ICT4D'],

            ['full_name'=> 'mvs',
            'speciality'=> 'réseau',
            'matricule'=> '21P2654',
            'sex'=>'m',
            'email'=> 'stevie.mache@facsciences-uy1.cm',
            'level'=> '3',
            'birthdate'=> '2004-08-10',
            'numero'=>'+237672950064',
            'filiere'=> 'ICT4D'],
        ]);
    }
}
