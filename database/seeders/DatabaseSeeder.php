<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CreateUsersSeeder::class,
            penelitianSeeder::class,
            CreateHKISeeder::class,
            CreateForumSeeder::class,
            CreateBASeeder::class,
        ]);
    }
}
