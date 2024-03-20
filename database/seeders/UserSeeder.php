<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin'), // Ganti dengan password yang sesuai
                'role_id' => 1, // Sesuaikan dengan id role admin
            ],
            [
                'name' => 'user',
                'email' => 'user@example.com',
                'password' => Hash::make('user'), // Ganti dengan password yang sesuai
                'role_id' => 2, // Sesuaikan dengan id role user
            ],
        ]);
    }
}
