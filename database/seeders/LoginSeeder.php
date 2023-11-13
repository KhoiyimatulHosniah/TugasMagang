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
                'name'=>'Desi',
                'email'=>'desi@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Nia',
                'email'=>'nia@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Andriana',
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
