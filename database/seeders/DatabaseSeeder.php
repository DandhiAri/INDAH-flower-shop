<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        for($i = 1; $i <= 10; $i++){
            User::factory->insert([
              'name' => fake()->name,
              'username' => fake()->userName,
              'telp' => fake()->phoneNumber,
              'pass' => Hash::make(fake()->word),
              'email' => fake()->email,
            ]);
        }
    }
}
