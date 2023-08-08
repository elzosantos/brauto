<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'year' => fake()->numberBetween('2012', '2024'),
            'exemplar_id' => '99d67c41-7d55-45bb-bf78-4a43f8d5ac12',
            'color' => fake()->name(),
            'version' => fake()->name(),
            'renavam' => fake()->numberBetween('1', '100'),
            'status' => '1'

             
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
