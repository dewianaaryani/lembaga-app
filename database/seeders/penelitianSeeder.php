<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class penelitianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penelitians')->insert([
            'id' => 1, 
            'nidn' => '10121332',
            'no_penugasan' => 'yxxxx',
            'tk_penugasan' => '2024-01-21', 
            'judul' => 'xxx',
            'anggota1' => 'xxx', 
            'anggota2' => 'xxxxx', 
            'fakultas' => 'xxxxx', 
            'skema_penelitian' => 'xxxxxx', 
            'program_hibah' => 'xxxxx', 
            'hak_cipta' => 'xxxxx', 
            'kontrak_riset' => 'xxxxx', 
            'status' => 'your_status_value',
            'kontrak_lddikti' => 'xxxx', 
            'tk_lddikti' => '2024-01-22', 
            'no_tanggal_dipa' => 'xxxxx', 
            'prototype' => 'xxxx', 
            'publikasi' => 'xxxx',
            'dana' => 5000000, 
            ]);
    }
}
