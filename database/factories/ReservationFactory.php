<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'resource_id' => fake()->numberBetween(1, 10),
            'start_time' => fake()->dateTime(),
            'end_time' => fake()->dateTime(),
            'purpose' => "Formações",
            'participants_count' => fake()->numberBetween(10, 50),
            'status' => fake()->randomElement(['pendente', 'aprovado', 'cancelado']),
        ];
    }
}
