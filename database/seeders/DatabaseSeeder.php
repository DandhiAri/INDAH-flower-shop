<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        \App\Models\User::factory()->create([
            'name' => 'dandhiari',
            'username' => 'dandhiari22',
            'telp' => '082141794129',
            'alamat' => 'semboro',
            'password' => Hash::make('mangan'),
            'email' => 'dandhiari@null.com',
            'role' => 'admin',
        ]);
        for($i = 1; $i <= 10; $i++){
            User::factory()->create([
              'name' => fake()->name,
              'username' => fake()->userName,
              'telp' => fake()->phoneNumber,
              'alamat' => fake()->address,
              'password' => Hash::make(fake()->word),
              'email' => fake()->safeEmail,
              'role' => fake()->randomElement(['admin','user']),
            ]);
        }
    }
}
