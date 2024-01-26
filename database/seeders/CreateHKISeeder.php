<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class CreateHKISeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hkis')->insert([
            'sertifikat_hki' => 'xxx',
            'id_penelitian' => '1',
            'judul' => 'xxx',
            'status' => 'xxx',
            'jenis' => 'xxx',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
