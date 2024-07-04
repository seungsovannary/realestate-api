<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'profile' => 'https://images.bigbadtoystore.com/images/p/full/2017/07/09ca66ba-f8a0-48ad-af32-ab67d5007490.jpg',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'), // change 'password' to a secure password
                'role_id' => '1',
                'remember_token' => null,
            ],
            [
                'name' => 'Seller',
                'profile' => 'https://i.pinimg.com/564x/aa/fe/fe/aafefe306692fee7a75e83dacf9d5957.jpgg',
                'email' => 'seller@example.com',
                'password' => Hash::make('password'), // change 'password' to a secure password
                'role_id' => '2',
                'remember_token' => null,

            ],
            [
                'name' => 'Buyer',
                'profile' => 'https://i.pinimg.com/564x/e4/bc/04/e4bc0404845880d9ce97195372e06acf.jpg',
                'email' => 'buyer@example.com',
                'password' => Hash::make('password'), // change 'password' to a secure password
                'role_id' => '3',
                'remember_token' => null,

            ],
        ];

        DB::table('users')->insert($users);
    }
}
