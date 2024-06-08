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
                'no_telp' => '87882745232',
                'password' => bcrypt('admin')
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'role' => 'user',
                'no_telp' => '87882745232',
                'password' => bcrypt('user')
            ],
            [
                'name' => 'koperasi',
                'email' => 'koperasi@koperasi.com',
                'role' => 'koperasi',
                'no_telp' => '87882745232',
                'password' => bcrypt('koperasi')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
