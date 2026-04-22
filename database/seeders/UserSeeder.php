<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name'     => 'Admin Argon',
            'email'    => 'admin@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password123'),
            'role'     => 'admin', // Mengisi kolom role yang kita buat tadi
        ]);
    
        \App\Models\User::create([
            'name'     => 'Regular User',
            'email'    => 'user@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password123'),
            'role'     => 'user',
        ]);
    }
    
}
