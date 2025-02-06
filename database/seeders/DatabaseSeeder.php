<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chica;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear 10 registros de chicas usando el factory
        Chica::factory(50)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
