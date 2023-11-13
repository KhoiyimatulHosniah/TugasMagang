<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'username'=>'Desi',
                'email'=>'desi@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt('123456')
            ],
            [
                'username'=>'Nia',
                'email'=>'nia@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
            [
                'username'=>'Andriana',
                'email'=>'andriana@gmail.com',
                'role'=>'notulen',
                'password'=>bcrypt('123456')
            ]
        ];

        foreach($userData as $key =>$val){
            User::create($val);
        }
    }
}
