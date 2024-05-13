<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password' => bcrypt('admin')
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'role' => 'user',
                'password' => bcrypt('user')
            ],
            [
                'name' => 'koperasi',
                'email' => 'koperasi@koperasi.com',
                'role' => 'koperasi',
                'password' => bcrypt('koperasi')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
