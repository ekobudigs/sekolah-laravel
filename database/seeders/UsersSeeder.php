<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'PakGuru',
            'role' => 'admin',
            'siswa_id' => '4',
            'email' => 'ekobudin@gmail.com',
            'password' => bcrypt('password')
        ]);
        DB::table('users')->insert([
            'name' => 'eko ndan',
            'role' => 'admin',
            'siswa_id' => '2',
            'email' => 'ekondan@gmail.com',
            'password' => bcrypt('password')
        ]);
        DB::table('users')->insert([
            'name' => 'erin nofita',
            'role' => 'siswa',
            'siswa_id' => '3',
            'email' => 'erin@gmail.com',
            'password' => bcrypt('password')
        ]);
        
    }
}
