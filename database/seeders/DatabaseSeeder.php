<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // User dummy (opsional)
    User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);

    // 🔥 TAMBAHKAN INI
    $this->call(AdminSeeder::class);
    }
}
