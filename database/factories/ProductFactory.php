<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'slug' => fake()->unique()->slug(),
            'category' => fake()->numberBetween(1,3),
            'stock' => fake()->numberBetween(0,25),
            'desc' => fake()->paragraphs,
            'color' => fake()->numberBetween(1,4),
            'size' => fake()->numberBetween(1,4),
            'price' => fake()->number(),
        ];
    }
}
