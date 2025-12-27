<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('admin123') // ubah jika perlu
        ]);

        User::create([
            'name' => 'User Demo',
            'email' => 'user@local.test',
            'role' => 'user',
            'password' => Hash::make('password123')
        ]);
    }
}
