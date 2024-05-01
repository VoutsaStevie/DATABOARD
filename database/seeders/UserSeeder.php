<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name'=> 'Admin',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('1234'),
            'role'=>'admin'],

            ['name'=> 'Visitor',
            'email'=> 'visitor@gmail.com',
            'password'=> bcrypt('12345'),
            'role'=>'visitor'],

            ['name'=> 'Teacher',
            'email'=> 'teacher@gmail.com',
            'password'=> bcrypt('14345'),
            'role'=>'teacher'],

            ['name'=> 'Vouts',
            'email'=> 'machevoutsa@gmail.com',
            'password'=> bcrypt('1234'),
            'role'=>'student'],
        ]);
    }
}
