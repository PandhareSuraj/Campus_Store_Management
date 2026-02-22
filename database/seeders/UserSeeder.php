<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'principal'
        ]);

        User::create([
            'name' => 'HOD User',
            'email' => 'hod@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'hod'
        ]);

        User::create([
            'name' => 'Normal User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user'
        ]);
    }
}