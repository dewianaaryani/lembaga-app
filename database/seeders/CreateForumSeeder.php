<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class CreateForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forums')->insert([
            'sertifikat_forum' => 'xxx',
            'id_penelitian' => '1',
            'judul' => 'xxx', 
            'nama_forum' => 'xxxx',
            'institusi_penyelenggara' => 'xxxxx',
            'waktu_pelaksanaan_awal' => now(), 
            'waktu_pelaksanaan_akhir' => now(), 
            'tempat' => 'xxxx',
            'status' => 'xxxxx',
            'created_at' => now(),
            'updated_at' => now(),
            ]);
    }
}
