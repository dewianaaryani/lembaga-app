<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Lembaga User',
               'username'=>'lembaga',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Dewiana',
               'username'=>'10121332',
               'type'=> 0,
               'password'=> bcrypt('10121332'),
            ],
            
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
