<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'AdminTest',
            'email' => 'wisit.soontornn@gmail.com',
            'password' => Hash::make('Keng1234'),
            'role' => '1',
            'status_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'UserTest',
            'email' => 'wisit4535@gmail.com',
            'password' => Hash::make('Keng1234'),
            'role' => '0',
        ]);
    }
}


