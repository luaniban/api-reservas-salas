<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resource>
 */
class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => "Sala " . fake()->name(),
            'type' => fake()->randomElement(['Sala', 'Lab']),
            'capacity' => fake()->randomNumber(2),
            'location' => fake()->address(),
            'active' => fake()->boolean()
        ];
    }
}
