<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class CreateBASeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku_ajar_teks')->insert([
            'sertifikat_buku_ajar' => 'xxxx',
            'id_penelitian' => '1',
            'penerbit' => 'xxxx',
            'lampiran' => 'xxx',
            'judul' => 'xxxx',
            'isbn' => 'xxxx',
            'jumlah_halaman' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            ]);
    }
}
