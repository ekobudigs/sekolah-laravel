<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'eko',
            'nis' => '122',
            'tgl_lahir' => '2001-11-09'
        ]);
        DB::table('siswa')->insert([
            'nama' => 'ndan',
            'nis' => '123',
            'tgl_lahir' => '2002-06-20'
        ]);
    }
}
